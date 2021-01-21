<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_expense extends MX_Controller {


    /************************ all assets view  **********************************/
	public function expense_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All expense";	   
		$data['data'] = $this->mod_admin_slect->select_data('hstl_expenses');
		$this->load->view('expense-all',$data);
	}

	/************************ add assets view  **********************************/
	public function add_expense()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "Add Expense";
		$this->load->view('add-expense',$data);
	}

	/************************ add asset function  *******************************/
	public function insert_expense()
	{
		if($this->input->is_ajax_request())
		{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$array = array(
		'expense_name' 	 => $this->input->post('name'),
		'expense_amount' 	 => $this->input->post('amount'),
		'expense_month'    => date('F'),
		'expense_date'    => date('Y-m-d')
		);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->insert_data('hstl_expenses',$array);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
		redirect('add-expense');
		}
	}

	/************************ get data of asset for updation  **********************/
	public function getupdate_expense()
	{
         $id  = $this->input->post('id1');
         $this->load->model('mod_admin_slect');
         $condition  = array('expense_id'=>$id);
         $data  = $this->mod_admin_slect->getupdate('hstl_expenses',$condition);
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

   /************************ perform update operation on request  ***************************/
   public function updated_expense()
   {
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id = $this->input->post('id');
		$fields = array(
		'expense_name' 	 => $this->input->post('name'),
		'expense_amount' 	 => $this->input->post('amount'),
		'expense_month'    => date('F'),
		'expense_date'    => date('Y-m-d')
		);
		$condition = array('expense_id'=>$id);
		$this->load->model('mod_admin_form');
		$data = $this->mod_admin_form->updated_data('hstl_expenses',$fields,$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   

   	}

	/************************ all assets get on request  **********************************/    
    public function expenseajax_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$result['data'] = $this->mod_admin_slect->select_data('hstl_expenses');
		$data['message'] = $this->load->view('ajax/update-expense-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ view single asset on request  *******************************/
	public function view_expense()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('expense_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->getupdate('hstl_expenses',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ delete asset on request  ************************************/
	public function delete_expense()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('expense_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->delete_asset('hstl_expenses',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}

	/************************ end of controller  ******************************************/
}