<?php

class Api extends Controller {

	function Api()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}
	
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
function budget($year = 0, $org = 0,/* $program = '',*/ $format = 'json'){
		$data['format'] = $format;
		//$year is required.
		if((int)$year == 0){
			//load a view that explains how to use this API call
			$this->index();
		}else{
			$data['data'] = $this->Budget->get_budget($year, $org);
			$this->load->view('api', $data);
		}
	}
	
	function listing($year='', $item='', $format = 'json'){
		$data['format'] = $format;
		
		//If no valid year is printed, show some instructions for this function.
		if((int)$year == 0){
			//load a view that explains how to use this API call
		}else{
	 		switch($item){
				case 'organizations':
					$data['data'] = $this->Budget->get_organizations();
					break;
				default:
					//show all available budget years
					
					

			}
		}
		$this->load->view('api', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */