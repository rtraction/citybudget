<?php

class Budget extends Model {

	function Budget()
	{
		parent::Model();
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
	
	function get_budgets() {
		$query = $this->db->get("budgets");
		if($query->num_rows() > 0) {
			$return = array();
			foreach($query->result() as $row) {
				$return[] = $row;
			}
			return $return;
		}
	}
	
	/*Not yet tested*/
	function set_budget_id($name){
		return $this->db->insert('budgets', array('name'=>$name));
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */