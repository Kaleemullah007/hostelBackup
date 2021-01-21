<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_login extends CI_Model {

	/**
	 * this module will handle all login requests from
	 * students , admin and staff
	 */
  
  function login_validate($tbl,$fields){
   $result = array();
   $query = $this->db->select('*')->from($tbl)->where($fields)->get();
   if($query->num_rows() >=1)
   {
   	$data = $query->row();
   	$items = array(
   	'username' 		=> $data->staff_cnic,
   	'is_logged_in' 	=> 1,
   	'role' 			=> 'admin'
   	);
   	$this->session->set_userdata($items);
   	$result['error'] = false;
   	$result['message'] = "Login Successfull! please wait a moment";
   }
   else
   {
    $result['error'] = true;
   	$result['message'] = "Login Failed! Try Again";
   }
   return $result;
  }

}
