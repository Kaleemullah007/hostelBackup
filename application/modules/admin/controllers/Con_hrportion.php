<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_hrportion extends MX_Controller {

	/************************ hrportion home view  **********************************/
	public function hrportion_home()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "HR Management Home - Imperial Dormitory";
		$this->load->view('hrportion-home',$data);
	}

	/************************ hr sallary log details view  **********************************/
	public function staff_sallary()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['designation'] = $this->mod_admin_slect->select_field_unique_data('hstl_staff','staff_designation',array('staff_designation')); 
		$data['title'] = "HR Sallary Log Details - Imperial Dormitory";
		$this->load->view('staff-sallary',$data);
	}

	/************************ hr sallary log details view  **********************************/
	public function sallary_by_designation()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		if($this->input->is_ajax_request())
		{
			$this->load->model('mod_admin_slect');
			$condition = array('hstl_staff.staff_designation'=>$this->input->post('desig'));
			$fields = array(
				'hstl_staff.staff_id',
				'sallary_id',
				'staff_designation',
				'staff_name',
				'staff_sallary',
				'sallary_status',
				'staff_gender',
				'sallary_date',
				'sallary_accounts_status',
				'sallary_hr_status',
				'sallary_admin_status',
				);
			$result['data'] = $this->mod_admin_slect->select_join_two_tables_multiple_record('hstl_staff','staff_id','hstl_staff_sallaries','staff_id',$condition,$fields); 
			$result['flag'] = "designation"; 
			$data['message'] = $this->load->view('ajax/hrportion-ajax-sallary-search',$result,TRUE);
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ hr sallary log details by gender  **********************************/
	public function sallary_by_gender()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		if($this->input->is_ajax_request())
		{
			$this->load->model('mod_admin_slect');
			$condition = array('hstl_staff.staff_gender'=>$this->input->post('gender'));
			$fields = array(
				'hstl_staff.staff_id',
				'sallary_id',
				'staff_designation',
				'staff_name',
				'staff_sallary',
				'sallary_status',
				'staff_gender',
				'sallary_date',
				'sallary_accounts_status',
				'sallary_hr_status',
				'sallary_admin_status',
				);
			$result['data'] = $this->mod_admin_slect->select_join_two_tables_multiple_record('hstl_staff','staff_id','hstl_staff_sallaries','staff_id',$condition,$fields); 
			$result['flag'] = "gender"; 
			$data['message'] = $this->load->view('ajax/hrportion-ajax-sallary-search',$result,TRUE);
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ hr sallary log details by date range  ****************************/
	public function sallary_by_daterange()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		if($this->input->is_ajax_request())
		{
			$this->load->model('mod_admin_slect');
			$start = $this->input->post('start');
			$end   = $this->input->post('end');
			if($start>$end)
			{
				$temp  = $start;
				$start = $end;
				$end   = $temp;
			}
			$condition = array('hstl_staff_sallaries.sallary_date >='=>$start,'hstl_staff_sallaries.sallary_date <='=>$end);
			$fields = array(
				'hstl_staff.staff_id',
				'sallary_id',
				'staff_designation',
				'staff_name',
				'staff_sallary',
				'sallary_status',
				'staff_gender',
				'sallary_date',
				'sallary_accounts_status',
				'sallary_hr_status',
				'sallary_admin_status',
				);
			$result['data'] = $this->mod_admin_slect->select_join_two_tables_multiple_record('hstl_staff','staff_id','hstl_staff_sallaries','staff_id',$condition,$fields); 
			$result['flag'] = "date-range"; 
			$data['message'] = $this->load->view('ajax/hrportion-ajax-sallary-search',$result,TRUE);
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ hr sallary log details by month and year  ************************/
	public function sallary_by_monthyear()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		if($this->input->is_ajax_request())
		{
			$this->load->model('mod_admin_slect');
			$month = $this->input->post('month');
			$year  = $this->input->post('year');
			$date  = $year.'-'.$month;
			$condition = array('hstl_staff_sallaries.sallary_date '=>$date);
			$fields = array(
				'hstl_staff.staff_id',
				'sallary_id',
				'staff_designation',
				'staff_name',
				'staff_sallary',
				'sallary_status',
				'staff_gender',
				'sallary_date',
				'sallary_accounts_status',
				'sallary_hr_status',
				'sallary_admin_status',
				);
			$result['data'] = $this->mod_admin_slect->select_like_join_two_tables_multiple_record('hstl_staff','staff_id','hstl_staff_sallaries','staff_id',$condition,$fields); 
			$result['flag'] = "date-range"; 
			$data['message'] = $this->load->view('ajax/hrportion-ajax-sallary-search',$result,TRUE);
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ hr sallary log details forward to admin single  ************************/
	public function hr_forward_to_admin_single()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		if($this->input->is_ajax_request())
		{
			$data = array();
			$this->load->model('mod_admin_form');
			$pending = $this->input->post('pending');
			$condition = array('sallary_id'=>$pending);
			$fields = array('sallary_hr_status'=>1);
			$data   = $this->mod_admin_form->updated_data('hstl_staff_sallaries',$fields,$condition); 			
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ hr sallary log details forward to admin  ************************/
	public function hr_forward_to_admin_list()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		if($this->input->is_ajax_request())
		{
			$data = array();
			$this->load->model('mod_admin_form');
			$pending = json_decode($this->input->post('pending'));
			for($i = 0;$i<count($pending);$i++)
			{
			$condition = array('sallary_id'=>$pending[$i]);
			$fields = array('sallary_hr_status'=>1);
			$data[] = $this->mod_admin_form->updated_data('hstl_staff_sallaries',$fields,$condition); 			
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ hr attendance log details view  **********************************/
	public function staff_attendance()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "HR Attendance Log Details - Imperial Dormitory";
		$this->load->view('staff-attendance',$dataw);
	}

}