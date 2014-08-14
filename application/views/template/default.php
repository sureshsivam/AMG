<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<?php $this->load->view("template/includes/scripts"); ?>
<?php $this->load->view("template/includes/styles"); ?>
<title><?php echo $titleText?></title>
</head>
<body style="background:#FFFFFF;">
   <div id="sidebar"  style="background:#999966;">
    <div id="sidebar-wrapper" style="background:#999966;"> 
      <div id="profile-links" style="background:#999966;">
          <img src="<?php echo base_url(); ?>/images/deaslogo.jpg" width="170px" height="70px;"/>
      </div>
     
  
     
     <ul id="display"  style="width:auto;background:none;margin-bottom:30px;margin-top:0px;">
 	 <!--  <div class="clock " style="width:150px; margin:0 auto; padding:10px; border:0px solid #333; color:Black;font-weight:bold;font-size:12pt;" >  -->
 	 <li id="Date" style="margin-left:50px;display:block; width:100px;font-size:1.7em;color:#FFFFFF; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; "></li>
		<li id="hours" style="margin-left:20px;display:inline-block;  float:left; font-size:1.7em;color:#FFFFFF; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; "></li>
		<li id="point" style="float:left;display:inline-block; font-size:1.7em; color:#FFFFFF; -moz-animation:mymove 2s ease infinite;  -webkit-animation:mymove 1s ease infinite;  padding-right:5px; padding-left:5px;">:</li>
		<li id="min" style="display:inline-block;  float:left; color:#FFFFFF;font-size:1.7em; text-align:center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif;"></li>
		<li id="point" style="float:left; display:inline-block;font-size:1.7em; color:#FFFFFF;  -moz-animation:mymove 2s ease infinite;  -webkit-animation:mymove 1s ease infinite;  padding-right:5px;padding-left:5px;">:</li>
		<li id="sec" style="display:inline-block;  float:left; color:#FFFFFF;font-size:1.7em; text-align:center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; "></li>
	</ul>
 <?php if($this->session->userdata('admin_logged_in')){?>
      <ul id="main-nav" style="background:#424242;"><?php echo $sideLinks?></ul>   
      <?php }?>  
    </div>
     
  </div>
 
  <div id="main-content">
  	<?php echo $bodyContent?>  		
  </div> 
</body>
</html>