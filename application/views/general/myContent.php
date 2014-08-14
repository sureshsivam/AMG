<div  style="height: 150px;background:#999966">
<p style="text-align:center;padding-top:30px;font-size:22pt;font-weight:bolder;"> <img src="<?php echo base_url(); ?>images/deaslogo.jpg" width="1000px" height="70px;"/> </p>
</div>
<div id="login-form" style="height:200px;width:350px;border:3px solid black ;border-radius:20px;margin-top:50px;margin-left:360px;">
<p style="color:#21610B;text-align:center;font-size:18pt;font-weight:bolder;">Login Form</p>
<? echo form_open("logincheck/login"); ?>
	
    	<table id="login_form" style="font-weight:bolder;font-size:12pt;">
        	<tr style=""><td>Username:</td><td><input type="text" name="email" id="email"  style="width:150px;padding:0 0 0 5px;"/></td></tr>
            <tr style=""><td>Password:</td><td><input type="password" name="pwd" id="pwd" style='width:150px;'/></td></tr>
       		<tr style=""><td colspan="2" align="center"><? if(isset($err)) { echo $err; } ?>
        	<input type="submit" name="submit" id="submit" value="Login" class="btn_log" />
        	</td></tr>
        
	</table>
<? echo "</form>" ?>
</div>
sdafsafasf