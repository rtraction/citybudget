<?php

class Budget extends Model {

	function Budget()
	{
		parent::Model();
	}
	
	function list_organizations() {
		$query = $this->db->query("SELECT * FROM organizations");
		if($query->num_rows() > 0) {
			$return = array();
			foreach($query->result() as $row) {
				$return[] = $row;
			}
			return $return;
		}
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */