<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_dashboard extends MX_Controller {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */
	
	public function admin_dashboard()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "Admin Dashboard - Imperial Dormitary";
		$this->load->view('admin-dashboard',$data);
	}

	public function admin_profile()
	{  
		echo Modules::run('is-valid/is_valid/is_logged_in');
		$data['title'] = "Profile - Imperial Dormitary";
		$this->load->view('admin-profile',$data);
	}

	public function admin_logout()
	{  	
		$this->session->unset_userdata($this->session->all_userdata());	
		$this->session->sess_destroy();
		redirect('admin-login','refresh');
	}

}
