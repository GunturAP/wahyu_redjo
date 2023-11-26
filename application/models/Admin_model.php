<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

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
function edit_harga($id, $Data)
{
  $this->db->set($Data);
  $this->db->where('id', $id);
  $this->db->update('harga_emas');
}
//riwayat
public function get_riwayat()
{
  $query = $this->db->get('riwayat_harga_emas');
  return $query->result();
}
public function tambah_riwayat_harga($data)
{
  $this->db->insert('riwayat_harga_emas',$data);
}
function edit_riwayat_harga($id, $Data)
{
  $this->db->set($Data);
  $this->db->where('id_riwayat', $id);
  $this->db->update('riwayat_harga_emas');
}

//Outlet
public function get_outlet()
{
  $query = $this->db->get('outlet');
  return $query->result();
}
public function tambah_outlet($data)
{
  $this->db->insert('outlet',$data);
}
function edit_outlet($id, $Data)
{
  $this->db->set($Data);
  $this->db->where('id_outlet', $id);
  $this->db->update('outlet');
  return $this->db->affected_rows();
}
function hapus_outlet($id)
{
  $this->db->where('id_outlet', $id);
  $this->db->delete('outlet');
}
public function cek_riwayat($tgl,$bln,$thn)
{
  
  $this->db->where('tgl',$tgl);
  $this->db->where('bln',$bln);
  $this->db->where('thn',$thn);
  $query = $this->db->get('riwayat_harga_emas');
  return $query->row_array();
}
  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */