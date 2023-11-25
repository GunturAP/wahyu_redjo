<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('User_model');
  }

  public function index()
  {
    $this->load->view('user/header');
    $this->load->view('user/home');
    $this->load->view('user/footer');
  }
  public function harga_emas()
  {
    $harga=$this->User_model->get_harga();
    $array=array(
      'harga' => $harga
    );
    $this->load->view('user/header',$array);
    $this->load->view('user/harga_emas');
    $this->load->view('user/footer');
  }
  public function outlet()
  {
    $outlet=$this->User_model->get_outlet();
    $array=array(
      'outlet' => $outlet
    );
    $this->load->view('user/header',$array);
    $this->load->view('user/outlet');
    $this->load->view('user/footer');
  }
  public function koleksi()
  {
    $this->load->view('user/header');
    $this->load->view('user/koleksi');
    $this->load->view('user/footer');
  }
  public function blog()
  {
    $this->load->view('user/header');
    $this->load->view('user/blog');
    $this->load->view('user/footer');
  }
  public function kontak()
  {
    $this->load->view('user/header');
    $this->load->view('user/kontak');
    $this->load->view('user/footer');
  }

}


/* End of file User.php */
/* Location: ./application/controllers/User.php */