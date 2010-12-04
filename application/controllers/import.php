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
			print '<pre>';
			print_r($_POST);
			
			
			$orgs = $this->Budget->list_organizations();
			$budgets = $this->Budget->list_budgets();	
			
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