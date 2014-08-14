<?php
class Welcome extends CI_Controller
	{
		   function __construct()
		   {
			parent::__construct();
		
			$this->load->library('SimpleLoginSecure');
			
		//	$this->load->model('budjet_model');
			$this->load->helper('url');
			
			$this->load->library('session');
			if(!$this->session->userdata('admin_logged_in'))
			 {
			redirect("logincheck");
			}
	
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
	