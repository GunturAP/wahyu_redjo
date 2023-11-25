<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Custom_error extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index() {
    $this->output->set_status_header('404'); 
    $this->load->view('errors/error_404');
  }
    public function error_page()
    {
      $this->output->set_status_header('404'); 
      $this->load->view('errors/error_404');
    }
  

}


/* End of file Custom_error.php */
/* Location: ./application/controllers/Custom_error.php */