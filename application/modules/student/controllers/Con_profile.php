<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_profile extends MX_Controller {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */
	public function admin_profile()
	{
		$this->load->view('admin-profile');
	}

	public function staff_profile()
	{
		$this->load->view('staff-profile');
	}

	public function student_profile()
	{
		$this->load->view('student-profile');
	}
}
