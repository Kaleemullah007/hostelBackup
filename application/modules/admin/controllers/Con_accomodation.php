<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_accomodation extends MX_Controller {

	/************************ accomodation home view  **********************************/
	public function accomodation_home()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "Accomodation Home - Imperial Dormitory";
		$this->load->view('accomodation-home',$data);
	}

	/************************** all categories view  **********************************/
	public function all_catagories()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All Room Categories - Imperial Dormitory";	   
		$data['data'] = $this->mod_admin_slect->select_data('hstl_accomodation_cats');
		$this->load->view('all-catagories',$data);
	}

	/************************ add category view  *************************************/
	public function add_catagory()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "Add Room Category - Imperial Dormitory";	   
		$this->load->view('add-catagory',$data);
	}

	/************************ add partner function  *******************************/
	public function insert_category()
	{
		if($this->input->is_ajax_request())
		{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$array = array(
		'cat_name' 	     => $this->input->post('cat-name'),
		'cat_date'    	 => date('Y-m-d') );

		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->insert_data('hstl_accomodation_cats',$array);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
		redirect('add-catagory');
		}
	}

	/************************ get data of partner for updation  **********************/
	public function getupdate_category()
	{
         $id  = $this->input->post('id1');
         $this->load->model('mod_admin_slect');
         $condition  = array('cat_id'=>$id);
         $data  = $this->mod_admin_slect->getupdate('hstl_accomodation_cats',$condition);
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    /************************ perform update operation on request  ***************************/
    public function updated_category()
    {
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id = $this->input->post('id');
		$fields = array(
		'cat_name' 	 	 => $this->input->post('cat-name'),
		'cat_date'     			 => date('Y-m-d')
		);
		$condition = array('cat_id'=>$id);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->updated_data('hstl_accomodation_cats',$fields,$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   
   	}

   	/************************ all assets get on request  **********************************/    
    public function categoryajax_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$result['data'] = $this->mod_admin_slect->select_data('hstl_accomodation_cats');
		$data['message'] = $this->load->view('ajax/update-room-cat-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ view single asset on request  *******************************/
	public function view_category()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('cat_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->getupdate('hstl_accomodation_cats',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ delete partner on request  ************************************/
	public function delete_category()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('cat_id'=>$id);
		$condition1  = array('room_type'=>$id);
		$this->load->model('mod_admin_slect');  
		$this->mod_admin_slect->delete_asset('hstl_rooms',$condition1);
		$data = $this->mod_admin_slect->delete_asset('hstl_accomodation_cats',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************** all rooms view  *************************************/
	public function all_rooms()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All Rooms - Imperial Dormitory";	   
		$data['data'] = $this->mod_admin_slect->select_data('hstl_rooms');
		$data['cats'] = $this->mod_admin_slect->select_data('hstl_accomodation_cats');
		$this->load->view('all-rooms',$data);
	}

	/************************ add room view  ***************************************/
	public function add_room()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "Add Room - Imperial Dormitory";	
		$this->load->model('mod_admin_slect');   
		$data['cats'] = $this->mod_admin_slect->select_data('hstl_accomodation_cats');
		$this->load->view('add-room',$data);
	}

	/************************ add partner function  *******************************/
	public function insert_room()
	{
		if($this->input->is_ajax_request())
		{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$array = array(
		'room_no' 	         => $this->input->post('room-no'),
		'room_capacity' 	 => $this->input->post('room-capacity'),
		'room_type'  		 => $this->input->post('room-type'),
		'room_date'    		 => date('Y-m-d') );

		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->insert_data('hstl_rooms',$array);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
		redirect('add-room');
		}
	}

	/************************ get data of partner for updation  **********************/
	public function getupdate_room()
	{
         $id  = $this->input->post('id1');
         $this->load->model('mod_admin_slect');
         $condition  = array('room_id'=>$id);
         $data  = $this->mod_admin_slect->getupdate('hstl_rooms',$condition);
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    /************************ perform update operation on request  ***************************/
    public function updated_room()
    {
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id = $this->input->post('id');
		$fields = array(
		'room_no' 	         => $this->input->post('room-no'),
		'room_capacity' 	 => $this->input->post('room-capacity'),
		'room_type'  		 => $this->input->post('room-type'),
		'room_date'    		 => date('Y-m-d') 
		);

		$condition = array('room_id'=>$id);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->updated_data('hstl_rooms',$fields,$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   
   	}

   	/************************ all assets get on request  **********************************/    
    public function roomajax_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$result['data'] = $this->mod_admin_slect->select_data('hstl_rooms');
		$data['message'] = $this->load->view('ajax/update-room-detail-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ view single asset on request  *******************************/
	public function view_room()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('hstl_rooms.room_id'=>$id);
		$fields  = array('room_no','room_capacity','room_occupied_no','cat_name');
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->select_join_two_tables_single_record('hstl_rooms','room_type','hstl_accomodation_cats','cat_id',$condition,$fields);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ delete partner on request  ************************************/
	public function delete_room()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('room_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->delete_asset('hstl_rooms',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ check if already exist any field ******************************/
	public function check_if_exist()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$room_no  = $this->input->post('room_id');
		$condition  = array('room_no'=>$room_no);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->check_if_exist('hstl_rooms',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}
   
   /************************ end of controller  ******************************************/
}