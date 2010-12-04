<?php

class Budget extends Model {

	function Budget()
	{
		parent::Model();
	}
	
	function get_budget($year, $organization = 0){
		if($organization > 0) {
			$query = $this->db->query("SELECT name as organization, a.organization_id, a.program,  a.grouping, a.organization_id, a.amount as approved, b.amount as actual FROM amounts a LEFT JOIN amounts b on (a.type != b.type AND a.program = b.program) LEFT JOIN organizations ON (a.organization_id = organizations.id) WHERE a.year = $year AND a.type = 'approved' AND a.organization_id = $organization ORDER BY organizations.id");
		} else {
			$query = $this->db->query("SELECT name as organization, a.organization_id, a.program,  a.grouping, a.organization_id, a.amount as approved, b.amount as actual FROM amounts a LEFT JOIN amounts b on (a.type != b.type AND a.program = b.program) LEFT JOIN organizations ON (a.organization_id = organizations.id) WHERE a.year = $year AND a.type = 'approved' ORDER BY organizations.id");
		}
		
		$return = array();
		$items = array();
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
	
	function get_organizations() {
		$query = $this->db->query("select distinct year, o.id, name from amounts a left JOIN organizations o ON (organization_id = o.id);");
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
	
	/*Not yet tested*/
	function set_organization($name){
		return $this->db->insert_id('organizations', array('name'=>$name));
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */