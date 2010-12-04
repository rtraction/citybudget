<?php

class Budget extends Model {

	function Budget()
	{
		parent::Model();
	}
	
	function get_budget($year, $organization = 0){
		if($organization > 0) {
			$query = $this->db->query("SELECT * FROM amounts LEFT JOIN organizations ON (amounts.organization_id = organizations.id) WHERE year = $year AND organization_id = $organization ORDER BY organizations.id");
		} else {
			$query = $this->db->query("SELECT * FROM amounts LEFT JOIN organizations ON (amounts.organization_id = organizations.id) WHERE year = $year ORDER BY organizations.id");
		}
		if($query->num_rows() > 0) {
			$return = array();
			foreach($query->result() as $row) {
				$return[] = $row;
			}
			return $return;
		} else {
			return false;
		}
	}
	
	function get_organizations() {
		$query = $this->db->get("organizations");
		if($query->num_rows() > 0) {
			$return = array();
			foreach($query->result() as $row) {
				$return[] = $row;
			}
			return $return;
		}
	}
	
	/*Not yet tested*/
	function set_organization($name){
		return $this->db->insert_id('organizations', array('name'=>$name));
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */