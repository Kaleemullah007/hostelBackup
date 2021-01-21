<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_assets extends MX_Controller {


    /************************ all assets view  **********************************/
	public function assets_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All Assets - Imperial Dormitory";	   
		$data['data'] = $this->mod_admin_slect->select_data('hstl_assets');
		$this->load->view('assets-all',$data);
	}

	/************************ add assets view  **********************************/
	public function add_asset()
	{
		$data['title'] = "Add Asset - Imperial Dormitory";
		$this->load->view('add-asset',$data);
	}

	/************************ add asset function  *******************************/
	public function insert_asset()
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
	public function getupdate_asset()
	{
         $id  = $this->input->post('id1');
         $this->load->model('mod_admin_slect');
         $condition  = array('asset_id'=>$id);
         $data  = $this->mod_admin_slect->getupdate('hstl_assets',$condition);
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

   /************************ perform update operation on request  ***************************/
   public function updated_asset()
   {
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id = $this->input->post('id');
		$fields = array(
		'asset_name' 	 => $this->input->post('name'),
		'asset_amount' 	 => $this->input->post('amount'),
		'asset_date'    => date('Y-m-d')
		);
		$condition = array('asset_id'=>$id);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->updated_data('hstl_assets',$fields,$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   

   	}

	/************************ all assets get on request  **********************************/    
    public function assetsajax_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$result['data'] = $this->mod_admin_slect->select_data('hstl_assets');
		$data['message'] = $this->load->view('ajax/update-asset-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ view single asset on request  *******************************/
	public function view_asset()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('asset_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->getupdate('hstl_assets',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ delete asset on request  ************************************/
	public function delete_asset()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('asset_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->delete_asset('hstl_assets',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ end of controller  ******************************************/
}