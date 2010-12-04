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
/*
function budget($year = 0, $org = 0, $program = '', $format = 'json'){
		$data['format'] = $format;
		//$year is required.
		if((int)$year == 0){
			//load a view that explains how to use this API call
			$this->index();
		}else{
			$data['data'] = $this->Budget->get_budget($year, $org);
			$this->load->view('api', $data);
		}
	}*/
	
	function budget_get(){
		if(!$this->get('year')){
        	$this->response(array('error' => 'You must chose a year.'), 400);
        	
        }else{
	        
        	$budget = $this->Budget->get_budget($this->get('year'));
	    	
	        if($budget){
	            $this->response($budget, 200); // 200 being the HTTP response code
	        }else{
	            $this->response(array('error' => 'User could not be found'), 404);
	        }
        }
    }/*
    function list_get(){
		if(!$this->get('year')){
        	$this->response(array('error' => 'You must chose a year.'), 400);
        	
        }else{
	        
        	$list = $this->Budget->get_budget($this->get('year'));
	    	
	        if($budget){
	            $this->response($budget, 200); // 200 being the HTTP response code
	        }else{
	            $this->response(array('error' => 'User could not be found'), 404);
	        }
        }    	
    }*/
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */