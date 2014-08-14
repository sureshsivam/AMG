	
<!-- FOR Admin -->
<?php if($this->session->userdata('userrole')=='admin'){ ?>	
<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url('aboutus/index'); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>Home</a><li>
		<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url("aboutus/index"); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>About Us</a><li>
	
	<li> <a href="javascript:void(0);" class="nav-top-item <?php if($menu=='users') echo "current"; ?> "> User Management</a>
	  	<ul style="display: white;">
	  		<li><a href="<?php echo site_url("users/list_users");?>" <?php if ($menu=='users'){?>class="current"<?php }?> > User Details</a></li>
			<li><a href="<?php echo site_url("users/add_new_user");?>" <?php if ($menu=='users'){?>class="current"<?php }?> >Add new user</a>	    
			</ul>
	</li>
<?php }?>

	
<!-- FOR MD -->
<?php if($this->session->userdata('userrole')=='MD'){ ?>	
<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url('aboutus/index'); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>Home</a><li>
		<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url("aboutus/index"); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>About Us</a><li>
	
	<li> <a href="javascript:void(0);" class="nav-top-item <?php if($menu=='users') echo "current"; ?> "> User Management</a>
	  	<ul style="display: white;">
	  		<li><a href="<?php echo site_url("users/list_users");?>" <?php if ($menu=='users'){?>class="current"<?php }?> > User Details</a></li>
			<li><a href="<?php echo site_url("users/add_new_user");?>" <?php if ($menu=='users'){?>class="current"<?php }?> >Add new user</a>	    
			</ul>
	</li>
<?php }?>


<!-- FOR User -->
<?php if($this->session->userdata('userrole')=='user'){ ?>	
<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url('aboutus/index'); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>Home</a><li>
		<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url("aboutus/index"); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>About Us</a><li>
<?php }?>


<!-- FOR Teamleader -->
<?php if($this->session->userdata('userrole')=='teamleader'){ ?>	
<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url('aboutus/index'); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>Home</a><li>
		<li><a style="background:#FFFFFF;color:green" href="<?php echo site_url("aboutus/index"); ?>" class="nav-top-item" <?php if(($this->session->userdata('admin_logged_in'))&&($menu=='home')){?>class="current"<?php }?>>About Us</a><li>
<?php }?>