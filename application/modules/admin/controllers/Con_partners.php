<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_partners extends MX_Controller {

	/************************ all partners view  **********************************/
	public function partners_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All Partners - Imperial Dormitory";	   
		$data['data'] = $this->mod_admin_slect->select_data('hstl_liabilities');
		$this->load->view('partners-all',$data);
	}

	/************************ add partners view  **********************************/
	public function add_partner()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "Add Partner - Imperial Dormitory";	   
		$this->load->view('add-partner',$data);
	}

	/************************ add partner function  *******************************/
	public function insert_partner()
	{
		if($this->input->is_ajax_request())
		{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$array = array(
		'liable_partner_name' 	     => $this->input->post('partner-name'),
		'liable_partner_amount' 	 => $this->input->post('partner-amount'),
		'liable_partner_percentage'  => $this->input->post('partner-percentage'),
		'liable_date'    			 => date('Y-m-d') );

		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->insert_data('hstl_liabilities',$array);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
		redirect('add-asset');
		}
	}

	/************************ get data of partner for updation  **********************/
	public function getupdate_partner()
	{
         $id  = $this->input->post('id1');
         $this->load->model('mod_admin_slect');
         $condition  = array('liable_id'=>$id);
         $data  = $this->mod_admin_slect->getupdate('hstl_liabilities',$condition);
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    /************************ perform update operation on request  ***************************/
    public function updated_partner()
    {
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id = $this->input->post('id');
		$fields = array(
		'liable_partner_name' 	 	 => $this->input->post('partner-name'),
		'liable_partner_amount' 	 => $this->input->post('partner-amount'),
		'liable_partner_percentage'  => $this->input->post('partner-percentage'),
		'liable_date'     			 => date('Y-m-d')
		);
		$condition = array('liable_id'=>$id);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->updated_data('hstl_liabilities',$fields,$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   
   	}

   	/************************ all assets get on request  **********************************/    
    public function partnersajax_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$result['data'] = $this->mod_admin_slect->select_data('hstl_liabilities');
		$data['message'] = $this->load->view('ajax/update-partner-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ view single asset on request  *******************************/
	public function view_partner()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('liable_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->getupdate('hstl_liabilities',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ delete partner on request  ************************************/
	public function delete_partner()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('liable_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->delete_asset('hstl_liabilities',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ end of controller  ******************************************/
}