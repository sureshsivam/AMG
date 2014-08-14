<?php
class Aboutus extends CI_Controller
	{
		   function __construct()
		   {
			parent::__construct();
		
			$this->load->library('SimpleLoginSecure');
			$this->load->model('general_model');
			$this->load->helper('url');
	
		}

	function index()
	{	
		
		$data["menu"]='home';
		$this->template->write('titleText', "Home");
		$this->template->write_view('sideLinks', 'general/menu',$data);
        $this->template->write_view('bodyContent', 'login/about_us',$data);
        $this->template->render();
		
	}
}	