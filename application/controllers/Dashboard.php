<?php
defined('BASEPATH') or exit('No direct script access allowed');




class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->library('form_validation');
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/dashboard');
    $this->load->view('admin/footer');

  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */