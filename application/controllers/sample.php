<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class controller extends CI_Controller {
	// Calling admin Functions - localhost/blog/admin/dbmsBlog/<function Name>
	// localhost/blog/ not available
	// localhost/blog/admin/dbmsblog not available
	// Clean URLs not implemented
	
	
	public function index()
	{
		// ---> insert homepage headers/nav/footer
		$this->load->view('index');
	}
	
}