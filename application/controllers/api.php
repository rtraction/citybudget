<?php
require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller {

	
	/* 
	 * RESPONSE
	 * -Year
	 *   -Org1
	 * 	   -Program
	 * 	     -Number Proposed
	 * 	     -Number Approved
	 *       -Grouping (if exists)
	 *     -Program2
	 *       -...
	 *   -Org2 
	 *     -...
	 *
	 */
	
	function budget_get(){
		if(!$this->get('year')){
        	$this->response(array('error' => 'You must choose a year or an organization.'), 400);
        	
        }else{
	        if($this->get('org')){
	        	$budget = $this->Budget->get_budget((int)$this->get('year'), (int)$this->get('org'));
	        }else{
	        	$budget = $this->Budget->get_budget((int)$this->get('year'));
	        }
	    	
	        if($budget){
	            $this->response($budget, 200); // 200 being the HTTP response code
	        }else{
	            $this->response(array('error' => 'Budget year could not be found'), 404);
	        }
        }
    }

    function list_get(){
		if(!$this->get('type')){
        	$this->response(array('error' => 'You must choose a list type.'), 400);
        	
        }else{
	        
	        switch($this->get('type')){
	        	case 'orgs':
	        	case 'org':
	        	case 'organizations':
	        		$list = $this->Budget->get_organizations();
	        		break;
	        	default:
	        		$list = null;	        		
	        }
	        
        	if($list){
	            $this->response($list, 200); // 200 being the HTTP response code
	        }else{
	            $this->response(array('error' => 'List could not be found'), 404);
	        }
        }    	
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */