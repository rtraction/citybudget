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
		$data['title'] = "Importing CSV data";
		$this->load->view('header', $data);
		
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
			foreach($budget[0] as $key => $time){
				/*ORGANIZATION ID*/				
					//get it if the org exists
					$org = $this->Budget->get_organization_id($budget[1][$key]);
					
					if(!$org){
						$org = $this->Budget->set_organization($budget[1][$key]);
						$messages[] = array('message'=>'Creating the organization id: '.$org.' for "'.$budget[1][$key].'"');
						if(!$org){
							$messages[] = array('error'=>'Creating the organization id: '.$org.' for "'.$budget[1][$key].'"');
						}
							
					}
									
				/*GROUPING*/
					if($budget[2][$key] != '' && $budget[2][$key] != '- none -'){
						$group = trim($budget[2][$key]);
					}else{
						$group = '';
					}
				
				/*PROGRAM*/
					$program = trim($budget[3][$key]);

				$budgets = array();
					
				/*2008 actual*/
					$budgets[]=array('year'=>2008, 'type'=>'actual', 'amount'=>(int)trim($budget[4][$key]));
				
				/*2009 approved*/
					$budgets[]=array('year'=>2009, 'type'=>'approved', 'amount'=>(int)trim($budget[5][$key]));
					
				/*2009 revised */
					$budgets[]=array('year'=>2009, 'type'=>'actual', 'amount'=>(int)trim($budget[6][$key]));

				/*2010 approved*/
					$budgets[]=array('year'=>2010, 'type'=>'approved', 'amount'=>(int)trim($budget[7][$key]));

				/*INSERT INTO DB*/
				foreach($budgets as $bud){
					$success = $this->Budget->set_amount($program, $bud['amount'], $group, $org, $bud['year'], $bud['type']);
					if($success){
						$messages[] = array('message'=>'Inserted '.$program.' for '.$bud['year']);
					}else{
						$messages[] = array('error'=>'Failed to insert '.$program.' for '.$bud['year']);
					}
				}		
				$data['messages'] = $messages;

			}	
			
			$this->load->view('import/success', $data);
			
		/*Step 1, upload a CSV file*/	
		}else{	
			//display form to submit CSV file
			$this->load->view('import/import', $data);
		}
		
		$this->load->view('footer', $data);
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */