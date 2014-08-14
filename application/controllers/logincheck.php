<?php
class Logincheck extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('SimpleLoginSecure');
		$this->session->set_userdata("adminpage",0);
	}

	function index()
	{	
		$data["menu"]='home';
		$this->template->write('sideTitle', 'Main Menu');
		$this->template->write('titleText', "Login Form");
	    $this->template->write_view('bodyContent', 'general/myContent');
        $this->template->render();
	}

	

	function login()
	{
		if($this->session->userdata('admin_logged_in')) {
			redirect("/welcome/index");
		} else {
			$email = $this->input->post('email');
			$pwd = $this->input->post('pwd');

			if($this->simpleloginsecure->login($email, $pwd)) {
				redirect("/welcome/index");

			}
			else {
				$err = "Wrong Credentials";
				$data["err"] = $err;
				$data["menu"]='sales';
				$data["submenu"]='sales';
				$this->template->write_view('bodyContent', 'general/myContent',$data);
				$this->template->write_view('sideLinks', 'general/menu');
				$this->template->render();
			}
		}
	}


	
	function logout()
	{
		$this->simpleloginsecure->logout();
		redirect("general");
	}
	function create()
	{
		$form_data = $this->input->post();
		$uname=$form_data["u_name"];
		$username=$form_data["username"];
		$passwd=$form_data["passwd"];
		$ph_num=$form_data["ph_num"];
		$userrole=$form_data["userrole"];
		$dept=$form_data["dept"];
		$doj=$form_data["doj"];
		$mail=$form_data["email"];
			
		$addedname=$this->session->userdata('admin_user_email');
		//$data["result"]=$this->lms_model->add_team_table($uname,$dept,$desig,$doj,$l1,$l2);
		$this->simpleloginsecure->create($uname,$username,$passwd,$ph_num,$userrole,$addedname,$mail);
		redirect("users/add_new_user");
	}

	function adduser(){
		
		$this->template->write_view('sideLinks', 'general/menu');
		$this->template->write_view('bodyContent', 'general/adduser');
		$this->template->render();
	}
	
	function updateuser(){
		$form_data = $this->input->post();
		$uname=$form_data["u_name"];
		$username=$form_data["username"];
		$passwd=$form_data["passwd"];
		$ph_num=$form_data["ph_num"];
		$userrole=$form_data["userrole"];
		$mail=$form_data["mail"];
		
		$this->simpleloginsecure->update($uname,$username,$passwd,$ph_num,$userrole,$mail,$to_id);
		echo "User Information updated successfully";
	}
	
	
				function update_details(){
				$result= $this->input->post();	
			//	echo $result["name"];
				 $this->simpleloginsecure->update_details($result["name"],$result["pwd"],$result["phone"],$result["mail"],$result["id"]);
								
	}
}