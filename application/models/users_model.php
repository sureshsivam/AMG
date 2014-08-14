<?php
Class Users_model extends CI_Model{

function _construct()
	{
		parent::_construct();
	}
	
function get_users_list(){
	$role=$this->session->userdata('userrole')=='MD';
	if($role=='MD'){
	return $this->db->query("select * from admin_users WHERE user_role NOT IN ('MD')")->result();
	}
	Else{
	return $this->db->query("select * from admin_users WHERE user_email NOT IN('DEFAULT')")->result();
	}
}
function get_user_info($user_id){
	return $this->db->query("select * from admin_users where user_id='$user_id'")->result();
}

function remove_user_info($user_id){
			$this->db->query("Delete From team where EmployeeName='$user_id'");	
		$this->db->query("Delete From admin_users where user_email='$user_id'");
}


	function get_dept()
	{
		return $this->db->query("SELECT * FROM departments ")->result_array();
	}
	

function check_username($username){

		$query=$this->db->query("select  count(*) as 'count' from admin_users where user_email='$username'");
		foreach ($query->result_array() as $row);
		if( $row["count"] == 0)
			print("OK");
		 else
	 		print("E");
	}
	
	function get_team_leader($dept)
		{
		$leaders=$this->db->query("SELECT EmployeeName	FROM team  	where Designation IN ('TeamLeader') and Department ='$dept' ");
		$rowcount=$leaders->num_rows();
		if ($rowcount > 0)
		{
		$leaderno="";
		for($i=0;$i<$rowcount;$i++)
		{
		$row = $leaders->row_array($i); 
		$leader[$i]=$row['EmployeeName'];
		$leaderno=$leaderno."!".$leader[$i];
		}
		echo $leaderno;
		}

		}

}