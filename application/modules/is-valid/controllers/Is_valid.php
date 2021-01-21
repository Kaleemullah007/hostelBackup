<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Is_valid extends MX_Controller {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */

	public function is_logged_in_admin()
	{
		$role  = $this->session->userdata('role'); 
		$is_in = $this->session->userdata('is_logged_in'); 
		$username = $this->session->userdata('username'); 
		if(empty($role) || empty($is_in) || empty($username) || $role != 'admin' || $is_in != 1)
		{
		 $this->session->unset_userdata($this->session->all_userdata());	
		 $this->session->sess_destroy();
		 redirect('admin-login','refresh');
		}
	}

}
