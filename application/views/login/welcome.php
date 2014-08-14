<div  style="height:70px;background:#999966;">
<p style="margin-left:80%;padding-top:5px;line-height:0.5em;">User: <b><?php echo $this->session->userdata('fullname');?></b>&nbsp;&nbsp;<img src="../../images/rightarrow1.png" width="10px" height="10px;"/>&nbsp;&nbsp;&nbsp;<strong>
 <a href="<?php echo site_url("logincheck/logout"); ?>" style="color:black;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">Logout</a></strong></p>
<center style="margin-bottom:20px;font-size:20pt;position:inline;">Application Form</center>
 </div>
 
 <form name="userform" id="userform" method="post" action="<?php echo site_url("logincheck/create"); ?>" > 
<div style="height:auto; background:#999966;margin:20px 0px 0px 200px;width:60%;border:0px solid black ;border-radius:0px;">
<p style="height:40px;padding:20px 0px 0px 20px;" align="center"><span style="font-weight:bolder;font-size:18pt;">Application Form</span></p>
<hr width="100%">
<div align="center" style="margin:0px 0px 0px 0px;">
<table style="width:80%" border="0">
		<tr><td  id="error"align="center"colspan="2" style="color:red;width:250px;font-size:15px;font-weight:bolder;"> </td></tr>
	<tr>
		<td ><font class="font_align">Name</font></td>
		<td><input name="u_name" id="u_name" class="input" type="text" style="width:160px;height:18px;" value="" ></td>		
	</tr>
	<tr style="height:0%;">
		<td width="40%" ><font class="font_align">Username</font></td>
		<td ><input name="username" id="username" class="input" type="text" style="width:160px;height:18px;" value="" "></td>
	</tr>
	<tr>
		<td ><font class="font_align">Password</font></td>
		<td><input name="passwd" id="passwd" class="input" type="password" style="width:155px;height:18px;" value="" "></td>		
	</tr>
	
	<tr>
		<td ><font class="font_align">Phone Number</font></td>
		<td><input name="ph_num" id="ph_num" class="input" type="text" style="width:160px;height:18px;" value="" ></td>		
	</tr>
	<tr>
		<td ><font class="font_align">E-Mail ID</font></td>
		<td><input name="email" id="email" class="input" type="text" style="width:150px;height:18px;" value="" ></td>		
	</tr>
	<tr>
		<td ><font class="font_align">User role</font></td>
		<td><input name="user_role" id="user_role" class="input" type="text" style="width:150px;height:18px;" value="" ></td>		
	</tr>
	
	<tr>
		<td colspan="2" align="center" ><input style="width:100px" value="Submit" id="button" type="button"  onclick="javascript:user_form()">
		</td>
	</tr>
		
 		</table>
</div>
</div>
</form>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/users.js"></script>