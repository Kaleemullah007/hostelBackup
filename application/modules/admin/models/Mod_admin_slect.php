<?php 
/**
* 
*/
class Mod_admin_slect extends CI_Model
{

  /************************ select data function taking table name **************************/
	function select_data($tbl)
  {
    $result = array();
    $this->db->select('*');
    $result  = $this->db->get($tbl);
    return $result->result(); 
  }


  /************************ Sum of fileds **************************/
  function select_data_sum($tbl,$filed,$date)
  {
    $result = array();
    $this->db->select_sum($filed);
    $this->db->where($date);
    $result  = $this->db->get($tbl);
    if( count($result)>0)
   return $result->result(); 
 else{
  return 0;
}
  }

   function select_data_sum_four($tbl,$filed,$codition,$date)
  {
    $result = array();
    $this->db->select_sum($filed);
    $this->db->where($date);
    $this->db->where($codition);
    $result  = $this->db->get($tbl);
    if( count($result)>0)
   return $result->result(); 
 else{
  return 0;
   }
  }



  /************************ select data function taking table name **************************/
  function select_field_unique_data($tbl,$unique_field,$fields='*')
  {
    $result = array();
    $this->db->select($fields);
    $this->db->from($tbl);
    $this->db->distinct($unique_field);
    $result  = $this->db->get();
    return $result->result(); 
  }

  /******************** select single data function taking table name and condition ********/
  function getupdate($tbl,$condition)
  {
  	$result = array();
    $this->db->select('*');
    $this->db->from($tbl);
    $this->db->where($condition);
    $result  = $this->db->get();
    return $result->row();
  }

  /************************ delete single data function taking table name and conditon ******/
  function delete_asset($tbl,$condition)
  {
    $result = array();
    $this->db->where($condition);
    $this->db->delete($tbl);
    if($this->db->affected_rows() == 1 || $this->db->affected_rows() == "1null")
    $result['error'] = false;
    else
    $result['error'] = true;
    return $result;
  }

  /******************** select single data function taking table name and condition ********/
  function check_if_exist($tbl,$condition)
  {
    $result = array();
    $this->db->select('*');
    $this->db->from($tbl);
    $this->db->where($condition);
    $result1  = $this->db->get();
    if($result1->num_rows() > 0)
      $result['error'] = true;
    else 
      $result['error'] = false;
    return $result;
  }

  /******************** select single data function from two tables with join ********************/
  function select_join_two_tables_single_record($tbl1,$tbl1_join_field,$tbl2,$tbl2_join_field,$condition,$fields = '*')
  {
    $result = array();
    $this->db->select($fields);
    $this->db->from($tbl1);
    $this->db->join($tbl2,$tbl1.'.'.$tbl1_join_field.'='.$tbl2.'.'.$tbl2_join_field);
    $this->db->where($condition);
    $result1  = $this->db->get();
    return $result1->row();
  }

  /******************** select multiple data function from two tables with join condition ********************/
  function select_join_two_tables_multiple_record($tbl1,$tbl1_join_field,$tbl2,$tbl2_join_field,$condition,$fields = '*')
  {
    $result = array();
    $this->db->select($fields);
    $this->db->from($tbl1);
    $this->db->join($tbl2,$tbl1.'.'.$tbl1_join_field.'='.$tbl2.'.'.$tbl2_join_field);
    $this->db->where($condition);
    $result1  = $this->db->get();
    return $result1->result();
  }

  /******************** select multiple data function from two tables with join condition ********************/
  function select_like_join_two_tables_multiple_record($tbl1,$tbl1_join_field,$tbl2,$tbl2_join_field,$likecondition,$fields = '*')
  {
    $result = array();
    $this->db->select($fields);
    $this->db->from($tbl1);
    $this->db->join($tbl2,$tbl1.'.'.$tbl1_join_field.'='.$tbl2.'.'.$tbl2_join_field);
    $this->db->like($likecondition);
    $result1  = $this->db->get();
    return $result1->result();
  }

  /******************** select all data function from two tables with join ********************/
  function select_join_two_tables_all_record($tbl1,$tbl1_join_field,$tbl2,$tbl2_join_field,$fields = '*')
  {
    $result = array();
    $this->db->select($fields);
    $this->db->from($tbl1);
    $this->db->join($tbl2,$tbl1.'.'.$tbl1_join_field.'='.$tbl2.'.'.$tbl2_join_field);
    $result1  = $this->db->get();
    return $result1->result();
  }


/******************** select all data function from two tables with join ********************/
  function select_likesingle_table_all_record($tbl1,$likecondition)
  {
    $result = array();
    $this->db->select('*');
    $this->db->from($tbl1);
    $this->db->like($likecondition);
    $result1  = $this->db->get();
    return $result1->result();
  }

/************************ end of model for selection and deletion purpose ********************/
}