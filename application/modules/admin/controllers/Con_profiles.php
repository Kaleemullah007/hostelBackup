<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_profiles extends MX_Controller {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */
	public function profiles_home()
	{
		$this->load->view('profiles-home');
	}

	public function staff_profiles_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All Staff Profile";	   
		$data['data'] = $this->mod_admin_slect->select_data('hstl_staff');
		$this->load->view('all-staff-profiles',$data);
	}
	/************************ add asset function  *******************************/
	public function insert_staff()
	{
		if($this->input->is_ajax_request())
		{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$array = array(
		'asset_name' 	 => $this->input->post('name'),
		'asset_amount' 	 => $this->input->post('amount'),
		'asset_date'    => date('Y-m-d')
		);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->insert_data('hstl_assets',$array);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
		redirect('add-asset');
		}
	}

	/************************ get data of asset for updation  **********************/
	public function getupdate_staff()
	{
         $id  = $this->input->post('id1');
         $this->load->model('mod_admin_slect');
         $condition  = array('staff_id'=>$id);
         $data  = $this->mod_admin_slect->getupdate('hstl_staff',$condition);
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

   /************************ perform update operation on request  ***************************/
   public function updated_staff()
   {
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id = $this->input->post('id');
		$fields = array(
		'staff_name' 	 => $this->input->post('staff-name'),
		'staff_sallary' 	 => $this->input->post('sallary'),
		'staff_designation' 	 => $this->input->post('desig'),
		'staff_cnic' 	 => $this->input->post('cnic'),
		'staff_phone' 	 => $this->input->post('tel'),
		'staff_gender' 	 => $this->input->post('gender'),
		'staff_address' 	 => $this->input->post('address'),
		'staff_father_or_husband' 	 => $this->input->post('father-name'),
		'staff_email' 	 => $this->input->post('email-staff')
		);
		$condition = array('staff_id'=>$id);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->updated_data('hstl_staff',$fields,$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   

   	}

	/************************ all assets get on request  **********************************/    
    public function staffajax_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$result['data'] = $this->mod_admin_slect->select_data('hstl_staff');
		$data['message'] = $this->load->view('ajax/update-staff-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

/**********************************Get Seacrch result ***************************************/



public function staffajaxsearch_all()
	{
		

		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$val = $this->input->post('name');
		$this->load->model('mod_admin_slect');
		$condition = array('staff_name'=>$val);
		$result['data'] = $this->mod_admin_slect->select_likesingle_table_all_record('hstl_staff',$condition);
		//var_dump($result);
		$data['message'] = $this->load->view('ajax/update-staff-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ view single asset on request  *******************************/
	public function view_staff()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('staff_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->getupdate('hstl_staff',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ delete asset on request  ************************************/
	public function delete_staff()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('staff_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->delete_asset('hstl_staff',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}



































	public function student_profiles_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All Student Profile";	   
		$data['data'] = $this->mod_admin_slect->select_data('hstl_student');
		$this->load->view('all-student-profiles',$data);
	}
}
