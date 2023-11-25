<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }
  public function get_harga()
{
  $query = $this->db->get('harga_emas');
  return $query->row_array();
}
public function get_outlet()
{
  $query = $this->db->get('outlet');
  return $query->result();
}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */