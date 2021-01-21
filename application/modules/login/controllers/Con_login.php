<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_login extends MX_Controller {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */

	function __construct()
	{
	 parent::__construct();
	 $this->load->model('Mod_login','login');
	}

	public function admin_login()
	{
		$data['title'] = "Admin Login Area - Imperial Dormitary";
		$this->load->view('admin-login',$data);
	}

	public function admin_login_validate()
	{
		if($this->input->is_ajax_request())
		{
		  $fields = array(
		  	'staff_role' => 'admin',
		  	'staff_cnic' => $this->input->post('username'),
		  	'staff_password' => md5($this->input->post('password'))
		  );	
		  $data	= $this->login->login_validate("hstl_staff",$fields);
		  $this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
			redirect('admin-login','refresh');
		}
	}

	public function staff_login()
	{
		$data['title'] = "Staff Login Area - Imperial Dormitary";
		$this->load->view('staff-login',$data);
	}

	public function student_login()
	{
		$data['title'] = "Student Login Area - Imperial Dormitary";
		$this->load->view('student-login',$data);
	}
}
