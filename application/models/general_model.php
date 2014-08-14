<?php
Class General_model extends CI_Model{
function _construct()
	{
		parent::_construct();
	}
	
	
	function checkLeaveAvailability($leave_type)
	{
		$uname=$this->session->userdata('admin_user_email');
	$availability =$this->db->query("SELECT SUM(TotalDays) FROM leavehistory WHERE User='$uname' AND LeaveType='$leave_type' ");
	return $availability->result();
	}
	
	
	function insert_application_data($leave_type,$d1,$d2,$days,$officer,$reason,$hrs)
	{
		
		$add_date=date('Y-m-d H:i:s');
		$uname=$this->session->userdata('admin_user_email');		
		$availability =$this->db->query("INSERT INTO leavehistory(User,LeaveType,FromDate,ToDate,TotalDays,LeaveStatus,Reason,AppliedTime) VALUES('$uname','$leave_type','$d1','$d2','$days',1,'$reason','$add_date');");
			if($leave_type=='Sick Leave'){
			return $this->db->insert_id();
			}
			if($leave_type=='Comp-Off'){
						$this->db->query("UPDATE team SET Comp_off=ADDTIME(Comp_off,'$hrs') WHERE EmployeeName='$uname'");
				}
	}
		
		
				
			
		
    }
    
 
?>