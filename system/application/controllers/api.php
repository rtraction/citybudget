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
	
	function organizations($format = 'json'){
		$data = array();
		
		$data['data'] = $this->Budget->list_organizations();
		
		$data['format'] = $format;
		$this->load->view('api', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */