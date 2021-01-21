<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_inventory extends MX_Controller {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */

	/************************ Show data of inventory for view  **********************/
	public function inventory_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "All Mess Items - Imperial Dormitory";	   
		$data['data'] = $this->mod_admin_slect->select_join_two_tables_all_record('hstl_mess_items_in','itemin_id','hstl_mess_stock','itemin_id');
		$this->load->view('inventory-all',$data);
	}
	/*************************End Show all data on page **********************************/ 
                                  
    /*************************Load page add-inventory *************************************/
	public function add_inventory()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$data['title'] = "Add Mess Items - Imperial Dormitory";	   
		$this->load->view('add-inventory',$data);
	}
	/*************************end of add-inventory *************************************/  
	/********************function of add-inventory *************************************/
	public function insert_inventory()
	{
		if($this->input->is_ajax_request())
		{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$array = array(
		'itemin_name' 	 => $this->input->post('name'),
		'itemin_brand' 	 => $this->input->post('brand'),
		'itemin_quantity' 	 => $this->input->post('qty'),
		'itemin_unit' 	=> $this->input->post('unit'),
		'itemin_purchase_price'=>$this->input->post('price'),
		'itemin_supplier'=>$this->input->post('supplier'),
		'itemin_invoice_no'=>	$this->input->post('invoice'),
		'itemin_date'    => date('Y-m-d')
		);
		$this->load->model('mod_admin_form');
		$data1 = $this->mod_admin_form->get_insert_id_after_insertion('hstl_mess_items_in',$array);
  		$fields = array('itemin_id'	 => $data1,
		'stock_remain_quantity'	 => $this->input->post('qty'),
		'stock_date' 	 => date('Y-m-d'));
		$data = $this->mod_admin_form->insert_data('hstl_mess_stock',$fields);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
		redirect('add-inventory');
		}
	}
	/********************End of function add-inventory *************************************/

	/******************** get data of inventory for updation to show on modal***************/
	public function getupdate_inventory()
	{
        echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('hstl_mess_items_in.itemin_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->select_join_two_tables_single_record('hstl_mess_items_in','itemin_id','hstl_mess_stock','itemin_id',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    /********************end of function *************************************************/

   /************************ Update data subbmittted*************************************/
   public function updated_inventory()
   {
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id = $this->input->post('id');
		$id1 = $this->input->post('iteminid');
   		$remin = $this->input->post('qty');////orignial
   		$remin1 = $this->input->post('remain1');//// orignial hidden
   		$remin2 = $this->input->post('remain2');/////stock value
   	if($remin>$remin1)
   	   {
   		$incre = $remin-$remin1;	
   		$updted_quantity =$remin;
   		$updted_quantity1 = $remin2+$incre;
   	   }
   	else
   	   {
   		$decre = $remin1-$remin;	
   		$updted_quantity =$remin;
   		$updted_quantity1 = $remin2-$decre;
   	    }
      	$condition   = array('itemin_id'=>$id1);
		$array = array(
		'itemin_name' 	 => $this->input->post('name'),
		'itemin_brand' 	 => $this->input->post('brand'),
		'itemin_quantity' 	 => $updted_quantity,
		'itemin_purchase_price'=>$this->input->post('price'),
		'itemin_supplier'=>$this->input->post('supplier'),
		'itemin_invoice_no'=>	$this->input->post('invoice'),
		'itemin_date'    => date('Y-m-d')
		);
		$this->load->model('mod_admin_form');
		$data1 = $this->mod_admin_form->updated_data('hstl_mess_items_in',$array,$condition);
  		$fields = array('stock_remain_quantity'	 => $updted_quantity1,
		'stock_date' 	 => date('Y-m-d'));
		$data = $this->mod_admin_form->updated_data('hstl_mess_stock',$fields,$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   

   	}
   	/******************************** End of function*************************************/

	/************************ all inventory get show *************************************/    
    public function inventoryajax_all()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$this->load->model('mod_admin_slect');
		$result['data'] = $this->mod_admin_slect->select_join_two_tables_all_record('hstl_mess_items_in','itemin_id','hstl_mess_stock','itemin_id');
		$data['message'] = $this->load->view('ajax/update-inventory-ajax',$result,TRUE);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}
	/******************************** End of function*************************************/

	/************************ view single inventory on request  *******************************/
	public function view_inventory()
	{
		echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('hstl_mess_items_in.itemin_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->select_join_two_tables_single_record('hstl_mess_items_in','itemin_id','hstl_mess_stock','itemin_id',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}
    /******************************** End of function*************************************/

	/************************ delete inventory on request  ************************************/
	public function delete_inventory()
	{
     	echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('itemin_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data1 = $this->mod_admin_slect->delete_asset('hstl_mess_items_in',$condition);
		$data2 = $this->mod_admin_slect->delete_asset('hstl_mess_stock',$condition);
		$data = $this->mod_admin_slect->delete_asset('hstl_mess_items_out',$condition);
     	$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
	}
/******************************** End of function*************************************/

/************************ update inventory Withdraw inventory on request  ************************************/
    function withdraw_inventory(){
        echo Modules::run('is-valid/is_valid/is_logged_in_admin');
		$id  = $this->input->post('id1');
		$condition  = array('itemin_id'=>$id);
		$this->load->model('mod_admin_slect');  
		$data = $this->mod_admin_slect->getupdate('hstl_mess_stock',$condition);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));   		
    }
    /******************************** End of function*************************************/

/********************************Insert withraw amount in database*************************/
    function insert_withdraw(){
    if($this->input->is_ajax_request())
		{
			echo Modules::run('is-valid/is_valid/is_logged_in_admin');
			$this->load->model('mod_admin_form');
			$updated_remining  = $this->input->post('remaining')-$this->input->post('with');
			$fields = array('stock_remain_quantity'	 => $updated_remining,
			'stock_date' 	 => date('Y-m-d'));
			$condition =array('stock_id'	 => $this->input->post('id4'));
			$datafield  = array(
			'itemin_id'=>$this->input->post('id4'),
			'itemout_quantity'=>$this->input->post('with'),
			'itemout_date' => date('Y-m-d'));
			$data1 = $this->mod_admin_form->insert_data('hstl_mess_items_out',$datafield);
			$data = $this->mod_admin_form->updated_data('hstl_mess_stock',$fields,$condition);
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}
		else
		{
		redirect('add-inventory');
		}
    }
    /******************************** End of function*************************************/

	/************************ end of controller  ******************************************/
}
