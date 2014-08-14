<div  style="height:70px;background:#999966;">
<p style="margin-left:80%;padding-top:5px;line-height:0.5em;">User: <b><?php echo $this->session->userdata('fullname');?></b>&nbsp;&nbsp;<img src="../../images/rightarrow1.png" width="10px" height="10px;"/>&nbsp;&nbsp;&nbsp;<strong>
 <a href="<?php echo site_url("logincheck/logout"); ?>" style="color:black;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'"><img src="../../images/logout8.png" width="20px" height="20px;"/></a></strong></p>
<center style="margin-bottom:20px;font-size:20pt;position:inline;">Users Details</center>
 </div>
 <div style="height:auto;overflow:hidden; background:#F1F1F6;margin:20px 0px 0px 10px;width:100%;border:0px solid black ;border-radius:0px;">
			<div style="margin-left:0px;margin-bottom:10px;margin-right:0px;margin-top:10px;">
			<table border="0" width="100%" style="border-right:1px solid black;">
			<tr bgcolor="#999966" style="border-right:1px solid white;">
			<td align="center" width="4%" style="border-right:1px solid white;"><font color="white">S.No</font></td>
			<td align="center"  style="border-right:1px solid white;"><font color="white">Name</font></td>
			<td align="center"   style="border-right:1px solid white;"><font color="white">Username</font></td>
			<td align="center"  width="20%" style="border-right:1px solid white;"><font color="white">E - Mail ID</font></td>
			<td align="center"  width="8%" style="border-right:1px solid white;"><font color="white">Phone Number</font></td>
			<td align="center"    width="8%"  style="border-right:1px solid white;"><font color="white">User Role</font></td> 
			<td align="center"  style="border-right:1px solid white;"><font color="white">Added Date</font></td>
			</tr>
			<tr>	

<?php
   $counter=0;
 //  print("<table width='100%' height='100%' border='1' align='left' cellpadding='1' cellspacing='1' style='margin-bottom:20px'>");
   foreach($users as $row) {
   		$counter++;     	
     	$rowid="row".$counter;
     	print("<tr id='$rowid' class='td_rows' style='border-right:1px solid white;'>");
         print("<td align='center'><input type='text' style='' class='plain_txt' readonly='readonly' id='$counter' value='".$counter."' /></td>");
    	 $name_id="name".$counter;  
        print("<td align='center' ><input type='text' height='' style='margin-left:0px;' class='plain_txt' id='$name_id'  value='".$row->name."' /></td>");
        $uname_id="uname".$counter;
        print("<td align='center'><input type='text' style='' class='plain_txt' readonly='readonly' id='$uname_id' value='".$row->user_email."' /></td>");
    	$mail_id="email".$counter;
        print("<td align='center'><input type='text' style='' class='plain_txt' readonly='readonly' id='$mail_id' value='".$row->email."' /></td>");
     	$phone_id="phone".$counter;
        print("<td align='center'><input type='text' style='' class='plain_txt' readonly='readonly' id='$phone_id' value='".$row->phone_number."' /></td>");
        $role_id="role".$counter;
        print("<td align='center'><input type='text' style='' class='plain_txt' readonly='readonly' id='$role_id' value='".ucfirst($row->user_role)."'/></td>");
		print("</tr>");    	
		
   }
//print("</table>");  
	
		
echo "<input type='hidden' id='hrowcount' value='$counter' />";
?>  
</table>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/users.js"></script>