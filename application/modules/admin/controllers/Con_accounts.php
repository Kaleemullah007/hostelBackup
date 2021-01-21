<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_accounts extends MX_Controller {

	/************************ accounts home  view *************************************************/
	public function accounts_home()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$data['title'] = "Accounts Home - Imperial Dormitory";
		$this->load->view('accounts-home',$data);
	}

	/************************ start of staff sallaries accounts section **************************/

	/************************ pending sallary log details view accounts section ******************/
	public function approve_sallary()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['designation'] = $this->mod_admin_slect->select_field_unique_data('hstl_staff','staff_designation',array('staff_designation')); 
		$data['title'] = "Pending Sallary Log Details Accounts - Imperial Dormitory";
		$this->load->view('pending-staff-sallary-accounts',$data);
	}

	/************************ sallary log details view by designation  ****************************/
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
			$data['message'] = $this->load->view('ajax/accounts-ajax-pending-sallary-search',$result,TRUE);
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
			$data['message'] = $this->load->view('ajax/accounts-ajax-pending-sallary-search',$result,TRUE);
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
			$data['message'] = $this->load->view('ajax/accounts-ajax-pending-sallary-search',$result,TRUE);
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
			$data['message'] = $this->load->view('ajax/accounts-ajax-pending-sallary-search',$result,TRUE);
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ hr sallary log details forward to admin single  ************************/
	public function accounts_approve_sallary()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		if($this->input->is_ajax_request())
		{
			$data = array();
			$this->load->model('mod_admin_form');
			$pending = $this->input->post('pending');
			$condition = array('sallary_id'=>$pending);
			date_default_timezone_set("Asia/Karachi");
			$fields = array('sallary_accounts_status'=>1,'sallary_status'=>'paid','sallary_paid_date'=>date('Y-F-d h:i:sa'));
			$data   = $this->mod_admin_form->updated_data('hstl_staff_sallaries',$fields,$condition); 			
			$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
		}
		else
		redirect('error404');
	}

	/************************ get data of asset for updation  **********************/
	public function accounts_single_sallary_view()
	{
         $id  = $this->input->post('id1');
         $this->load->model('mod_admin_slect');
         $condition  = array('hstl_staff_sallaries.sallary_id'=>$id);
         $result['data']  = $this->mod_admin_slect->select_join_two_tables_single_record('hstl_staff_sallaries','staff_id','hstl_staff','staff_id',$condition);
         $data['message'] = $this->load->view('ajax/single-ajax-sallary-view',$result,TRUE);
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

	/************************ end of staff sallaries accounts section ***************************/

	public function generate_voucher()
	{
		$this->load->view('generate-voucher');
	}

	public function fee_payment()
	{
		$this->load->view('fee-payment');
	}

	public function income_statement()
	{
       
       echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$aray = array('vchr_monthly_fee','vchr_registration_fee','vchr_fee_concession_amount','vchr_late_fee_fine','vchr_fee_concession');
		$date  = array('vchr_due_date'=>date('Y-m-d'));
		///////////////////////////////// Fee count Count /////////////////////////////////
		for ($i=0; $i <=4 ; $i++) { 
		$data[] = $this->mod_admin_slect->select_data_sum('hstl_vouchers',$aray[$i],$date); 	
		}        
    	$res1['data'] =$data;
    	
 //////////////////////////////////////////// Expense Count /////////////////////////////////
		$aray = array('Rent','Hk','Bill','Other');
		$aray_sal = array('paid','unpaid');
    	for ($i=0; $i <=3 ; $i++) { 
    		$condition_for_type  = array('expense_type'=>$aray[$i]);
    		$fiel = array('expense_amount');
    		$datecon  = array('expense_date'=>date('Y-m-d'));
		$data1[] = $this->mod_admin_slect->select_data_sum_four('hstl_expenses',$fiel[0],$condition_for_type,$datecon); 	
		}
       $res1['data1'] =$data1;
 ///////////////////////////////// salaray Count /////////////////////////////////
        for ($i=0; $i <=1 ; $i++) { 
    		$condition_for_type  = array('sallary_status'=>$aray_sal[$i]);
    		$fiel = array('sallary_amount_paid');
    		$datesal  = array('sallary_date'=>date('Y-m-d'));
		$data2[] = $this->mod_admin_slect->select_data_sum_four('hstl_staff_sallaries',$fiel[0],$condition_for_type,$datesal); 	
		}
		$res1['data2']=$data2;
		$res1['title'] = "Income statement";
	   $this->load->view('income-statement',$res1);
	}




	public function income_statement_ajax()
	{
       if($this->input->is_ajax_request())
		{
			$start = $this->input->post('start1');
			$end = $this->input->post('end1');
         echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$aray = array('vchr_monthly_fee','vchr_registration_fee','vchr_fee_concession_amount','vchr_late_fee_fine','vchr_fee_concession');
		$date  = array('vchr_due_date >='=>$start,'vchr_due_date <='=>$end);
		///////////////////////////////// Fee count Count /////////////////////////////////
		for ($i=0; $i <=4 ; $i++) { 
		$data[] = $this->mod_admin_slect->select_data_sum('hstl_vouchers',$aray[$i],$date); 	
		}        
    	$res1['data'] =$data;
    	
 //////////////////////////////////////////// Expense Count /////////////////////////////////
		$aray = array('Rent','Hk','Bill','Other');
		$aray_sal = array('paid','unpaid');
    	for ($i=0; $i <=3 ; $i++) { 
    		$condition_for_type  = array('expense_type'=>$aray[$i]);
    		$fiel = array('expense_amount');
    		$datecon   = array('expense_date >='=>$start,'expense_date <='=>$end);
		$data1[] = $this->mod_admin_slect->select_data_sum_four('hstl_expenses',$fiel[0],$condition_for_type,$datecon); 	
		}
       $res1['data1'] =$data1;
 ///////////////////////////////// salaray Count /////////////////////////////////
        for ($i=0; $i <=1 ; $i++) { 
    		$condition_for_type  = array('sallary_status'=>$aray_sal[$i]);
    		$fiel = array('sallary_amount_paid');
    		$datesal  = $date  = array('sallary_date >='=>$start,'sallary_date <='=>$end);
		$data2[] = $this->mod_admin_slect->select_data_sum_four('hstl_staff_sallaries',$fiel[0],$condition_for_type,$datesal); 	
		}
		$res1['data2']=$data2;
		$res1['title'] = "Income statement";

	      $res1['message'] =   $this->load->view('ajax/update-income-ajax',$res1,TRUE);
		  $this->output->set_content_type('application/json')->set_output(json_encode($res1));
	}

	}


   
	public function balance_sheet()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		///////////////////////////////// Assets Count /////////////////////////////////
		$data['data'] = $this->mod_admin_slect->select_data('hstl_assets'); 	
		$data['patners'] = $this->mod_admin_slect->select_data('hstl_liabilities'); 	
    	//var_dump($data);
		$data['title'] = "Balance Sheet";
		$this->load->view('balance-sheet',$data);
	}

}
