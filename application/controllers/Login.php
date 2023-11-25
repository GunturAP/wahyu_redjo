<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Login extends CI_Controller
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
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run() == false) {
        $this->load->view('admin/login');
    } else {
        $this->_login();
      }

  }



private function _login()
{
  $username = $this->input->post('username');
  $password = $this->input->post('password');

  $user = $this->db->get_where('user', ['username' => $username])->row_array();
		//user ada
  if ($user) {
			//cek password
     if (password_verify($password, $user['password'])) {
        $data = [
           'username' => $user['username'],
       ];
       redirect ('admin');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Anda Salah </div>');
        redirect('login');
    }
  } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Username Tidak Terdaftar </div>');
      redirect('login');
  }
}

public function logout()
  {
      $this->session->unset_userdata($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Berhasil Keluar </div>');
      redirect('login');
  }

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */