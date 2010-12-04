<?php

class Budget extends Model {

	function Budget()
	{
		parent::Model();
	}
	
	function get_budget($year, $organization = 0){
		if($organization > 0) {
			$query = $this->db->query("SELECT o.name as organization, a.organization_id, a.program,  a.grouping, a.organization_id, a.amount as approved, b.amount as actual 
									   FROM amounts a 
									   LEFT JOIN amounts b on (a.type != b.type AND a.program = b.program AND a.year = b.year) 
									   LEFT JOIN organizations o ON (a.organization_id = o.id) 
									   WHERE a.year = $year AND a.type = 'approved' AND a.organization_id = $organization 
									   ORDER BY o.id");
		} else {
			$query = $this->db->query("SELECT o.name as organization, a.organization_id, a.program,  a.grouping, a.organization_id, a.amount as approved, b.amount as actual 
									   FROM amounts a 
									   LEFT JOIN amounts b on (a.type != b.type AND a.program = b.program AND a.year = b.year) 
									   LEFT JOIN organizations o ON (a.organization_id = o.id) 
									   WHERE a.year = $year AND a.type = 'approved' 
									   ORDER BY o.id");
		}
		
		$return = array();
		if($query->num_rows() > 0) {
			foreach($query->result() as $row){
				if(!isset($return[$row->organization_id])){
					$return[$row->organization_id] = array(
						'name' => $row->organization,
						'id' => $row->organization_id,
						'total_approved'=>0,
						'total_actual'=>0,
						'budget_items' => array()
					);
				}
				
				$return[$row->organization_id]['budget_items'][] = array(
					'program'=>$row->program,
					'grouping'=>$row->grouping,
					'approved'=>$row->approved,
					'actual'=>$row->actual
				);
				
				$approved = (int)$row->approved;
				$actual = (int)$row->actual;
				
				if($approved > 0){
					$return[$row->organization_id]['total_approved'] += $approved;
				}
				if($actual > 0){
					$return[$row->organization_id]['total_actual'] += $actual;
				}
				
			}
			return $return;
		} else {
			return false;
		}
	}
	
	function set_amount($program, $amount, $grouping, $org, $year, $type){
		return $this->db->insert('amounts', array(
			'program'=>$program,
			'amount'=>$amount,
			'grouping'=>$grouping,
			'organization_id'=>$org,
			'year'=>$year,
			'type'=>$type
			));
		return $this->db->insert_id();		

	}
	
	function get_organizations() {
		$query = $this->db->query("SELECT DISTINCT year, o.id, name from amounts a 
								   LEFT JOIN organizations o 
								   ON (organization_id = o.id);");
		if($query->num_rows() > 0) {
			$return = array();
			foreach($query->result() as $row) {
				if(!isset($return[$row->id])){
					$return[$row->id] = array(
						'name'=>$row->name,
						'years'=>array()
					);
				}	
				$return[$row->id]['years'][] = $row->year;
			}
			return $return;
		}
		return false;
	}
	
	function get_years(){
		$query = $this->db->query("SELECT a.year, a.type, sum(a.amount) as total
								   FROM amounts a 
								   LEFT JOIN amounts b on (a.type != b.type AND a.program = b.program AND a.year = b.year)
								   GROUP BY a.year, a.type;");
		if($query->num_rows() > 0) {
			$return = array();
			foreach($query->result() as $row) {
				if(!isset($return[$row->year]['year'])){
					$return[$row->year] = array('year'=>$row->year, 'types'=>array());
				}
					$return[$row->year]['types'][$row->type]=$row->total;
			}
			return $return;
		}
		
		return false;
	}
	
	function get_organization_id($name){
		$name = addslashes(trim($name));
		$query = $this->db->query("SELECT id FROM organizations WHERE name = '{$name}'");
		if($query->num_rows() > 0){
			$id = $query->result();
			return $id[0]->id;
		}else{
			return false;
		}
	}
	
	/*Not yet tested*/
	function set_organization($name){
		$success = $this->db->insert('organizations', array('name'=>$name));
		if($success){
			return $this->db->insert_id();		
		}else{
			return false;
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */