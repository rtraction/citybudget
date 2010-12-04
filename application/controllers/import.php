<?php

class Import extends Controller {

	function Import()
	{
		parent::Controller();	
	}
	
	function index()
	{
		/**
		 * There will be three stages to importing info
		 * to the database 
		 * 
		 * 1. Upload a CSV file. (done: zb)
		 * 2. Preview the data in a table, with a small amount of 
		 *    error checking and an approve button. (done: zb)
		 * 3. The data is inserted into the database. (Incomplete)
		 * 
		 * NOTE: Since we are assuming that this page will 
		 * not be accesssible to the general public, there
		 * error handling is minimal. 
		 * Don't upload malicious documents. 
		 * 
		 */
		
		$data=array();
		
		//These are the expected rows in the CSV file.
		$data['th'] = array(
			'Timestamp', 
			'Department or Organization', 
			'Group Heading', 
			'Program', 
			'2008 Net Actual', 
			'2009 Approved Net Budget',
			'2009 Revised Net Budget',
			'2010 Approved Net Budget'	
		);
		
		//processing a submitted CSV file
		if(isset($_POST['upload'])){
			$data['table'] = array();
						
			$file_handle = fopen($_FILES['csv_file']['tmp_name'], "r");
			while (!feof($file_handle) ) {
				$data['table'][] = fgetcsv($file_handle, 1024);	
			}
				
			fclose($file_handle);
			
			$this->load->view('import/preview', $data);
			
		}else if(isset($_POST['approve'])){
			$budget = $_POST['budget'];
			$uses = array();
			foreach($budget[0] as $key => $time){
				/*ORGANIZATION ID*/				
					//get it if the org exists
					$org = $this->Budget->get_organization_id($budget[1][$key]);
					if(is_int($org)){
						$org = $org['$budget[1][$key]'];
					//set it if it's a new org	
					}else{
						$org = $this->Budget->set_organization_id($budget[1][$key]);
					}
				
				/*GROUPING*/
					if($budget[2][$key] != '' AND  $budget[2][$key] != '- none -'){
						$group = trim($budget[2][$key]);
					}else{
						$group = '';
					}
				
				/*PROGRAM*/
					$program = trim($budget[3][$key]);

				$budgets = array();
					
				/*2008 actual*/
					$budget = $this->Budget->get_budget_id($data['th'][4]);
					//get the budget id, if this one exists
					if(is_int($budget)){
						$budgets[$budget] = (int)trim($budget[4][$key]);
					//set it if it's a new budget	
					}else{
						$budget[$this->Budget->set_budget_id($data['th'][4])] = (int)trim($budget[4][$key]);
					}
				
				/*2009 approved*/
					$budget = $this->Budget->get_budget_id($data['th'][5]);
					//get the budget id, if this one exists
					if(is_int($budget)){
						$budgets[$budget] = (int)trim($budget[5][$key]);
					//set it if it's a new budget	
					}else{
						$budget[$this->Budget->set_budget_id($data['th'][5])] = (int)trim($budget[5][$key]);
					}
					
				/*2009 revised */
					$budget = $this->Budget->get_budget_id($data['th'][6]);
					//get the budget id, if this one exists
					if(is_int($budget)){
						$budgets[$budget] = (int)trim($budget[6][$key]);
					//set it if it's a new budget	
					}else{
						$budget[$this->Budget->set_budget_id($data['th'][6])] = (int)trim($budget[6][$key]);
					}

				/*2010 approved*/
					$budget = $this->Budget->get_budget_id($data['th'][7]);
					//get the budget id, if this one exists
					if(is_int($budget)){
						$budgets[$budget] = (int)trim($budget[7][$key]);
					//set it if it's a new budget	
					}else{
						$budget[$this->Budget->set_budget_id($data['th'][7])] = (int)trim($budget[7][$key]);
					}
				/*INSERT INTO DB*/
				foreach($budgets as $budget_id=>$amount){
					$this->Budget->set_use_id($program, $amount, $group, $org, $budget_id);
				}		
			}
			
			print '<pre>';
			print_r($_POST);
			
			

			
			print_r($orgs);
			print_r($budgets);
			
			print '</pre>';
			
			
		/*Step 1, upload a CSV file*/	
		}else{	
			//display form to submit CSV file
			$this->load->view('import/import', $data);
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */