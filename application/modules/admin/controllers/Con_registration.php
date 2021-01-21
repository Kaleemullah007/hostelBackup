<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_registration extends MX_Controller {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */
	public function registration_home()
	{
		$this->load->view('registration-home');
	}

	public function staff_registration()
	{
		$this->load->view('staff-registration');
	}

	public function student_registration()
	{
		$this->load->view('student-registration');
	}
}
