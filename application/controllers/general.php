<?php
class General extends CI_Controller
{
 	
	function index()
	{	
        $this->template->write_view('bodyContent', 'general/myContent');
        $this->template->render();
							
	}
	
}
