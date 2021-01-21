<?php 
/**
* 
*/
class Mod_admin_form extends CI_Model
{

  /************************ insert data function taking table name and fields *******************/
	function insert_data($tbl,$fields)
  {
    $result = array();
    $query = $this->db->insert($tbl,$fields);
    if($this->db->affected_rows() == 1)
    $result['error'] = false;
    else
    $result['error'] = true;
    return $result;
  }

  /************************ insert data taking table name and fields returning ast inserted id **/
  function get_insert_id_after_insertion($tbl,$fields)
  {
     $this->db->insert($tbl,$fields);
     $insert_id = $this->db->insert_id();
     return  $insert_id;
   }

  /************************ update data function taking table name,fields and condition **********/
  function updated_data($tbl,$fields,$condition)
  {
    $result = array();
    $this->db->where($condition);
    $query = $this->db->update($tbl,$fields);
    if($this->db->affected_rows() == 1)
    $result['error'] = false;
    else
    $result['error'] = true;
    return $result;
  }

/************************ end of model for insertion and updation  *****************************/
}