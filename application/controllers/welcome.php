<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$data = array();
		$data['title'] = "Welcome to the London Ontario City Budget API";
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */