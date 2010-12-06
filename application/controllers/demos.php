<?php

class Demos extends Controller {

	function Demos()
	{
		parent::Controller();	
	}
	
	function index()
	{
			$data = array();
			$data['title'] = 'API Demos & Showcase';
		
			$this->load->view('header', $data);
			$this->load->view('demos/tableofcontents', $data);
			$this->load->view('footer', $data);
	}
	
	function demo($demo = '')
	{
		$data = array();
		
		switch($demo){
			case 'graph2009':
				$data['title'] = 'Approved vs. Actual 2009 Spending';
				$this->load->view('header', $data);
				$this->load->view('demos/graph2009/index', $data);
				$this->load->view('footer', $data);		
				break;
			case 'pilesofmoney':
				$data['title'] = 'Piles of (American) Money!';
				$this->load->view('header', $data);
				$this->load->view('demos/pilesofmoney/index', $data);
				$this->load->view('footer', $data);
			default:
				if(file_exists('application/views/demos/'.$demo.'/index.php')){
					$this->load->view('demos/'.$demo.'/index');
				}else{
					$data['title'] = 'API Demos & Showcase';
					$this->load->view('header', $data);
					$this->load->view('demos/tableofcontents', $data);
					$this->load->view('footer', $data);		
				}		
			}
			
	}
	
}

/* End of file demo.php */
/* Location: ./system/application/controllers/demo.php */