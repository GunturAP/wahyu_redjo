<?php
defined('BASEPATH') or exit('No direct script access allowed');

//untuk Login Sahaja

class Admin extends CI_Controller
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
  public function harga_emas()
  {
      $harga=$this->Admin_model->get_harga();
      $riwayat=$this->Admin_model->get_riwayat();
      $array=array(
        'harga' => $harga,
        'riwayat' => $riwayat
      );
    
    $this->load->view('admin/header',$array);
    $this->load->view('admin/update_harga_emas');
    $this->load->view('admin/footer');
  }
  
  public function tes(){
    echo date('j');
  }
  public function update_harga_emas()
  {
      $tgl=date('j');
      $bln=date('m');
      $thn=date('Y');
      $id=$this->input->post('id');
      $update=array(
        'jual_6'=>$this->input->post('jual_6'),
        'beli_6'=>$this->input->post('beli_6'),
        'jual_8'=>$this->input->post('jual_8'),
        'beli_8'=>$this->input->post('beli_8'),
        'jual_16'=>$this->input->post('jual_16'),
        'beli_16'=>$this->input->post('beli_16'),
        'jual_17'=>$this->input->post('jual_17'),
        'beli_17'=>$this->input->post('beli_17'),
        'jual_8_p'=>$this->input->post('jual_8_p'),
        'beli_8_p'=>$this->input->post('beli_8_p'),
        'jual_24'=>$this->input->post('jual_24'),
        'beli_24'=>$this->input->post('beli_24'),
        'time'=>time()
      );
      $riwayat=array(
        'jual_6'=>$this->input->post('jual_6'),
        'beli_6'=>$this->input->post('beli_6'),
        'jual_8'=>$this->input->post('jual_8'),
        'beli_8'=>$this->input->post('beli_8'),
        'jual_16'=>$this->input->post('jual_16'),
        'beli_16'=>$this->input->post('beli_16'),
        'jual_17'=>$this->input->post('jual_17'),
        'beli_17'=>$this->input->post('beli_17'),
        'jual_8_p'=>$this->input->post('jual_8_p'),
        'beli_8_p'=>$this->input->post('beli_8_p'),
        'jual_24'=>$this->input->post('jual_24'),
        'beli_24'=>$this->input->post('beli_24'),
        'tgl'=> $tgl,
        'bln'  => $bln,
        'thn' => $thn,
        'time'=>time()
      );
      $cek = $this->Admin_model->cek_riwayat($tgl,$bln,$thn);
      if(!$cek){
        //jika data riwayat belum ada
        $this->Admin_model->tambah_riwayat_harga($riwayat);

      }else{
        //jika data riwayat sudah ada
        $id=$cek['id_riwayat'];
        $this->Admin_model->edit_riwayat_harga($id,$riwayat);
     }
      $this->Admin_model->edit_harga($id,$update);
      $this->session->set_flashdata('msg', 'Data Rekening Berhasil Di Tambah');
      redirect('admin/harga_emas');
  
  }
  public function outlet()
  {
      $outlet=$this->Admin_model->get_outlet();
      $array=array(
        'outlet' => $outlet
      );
  
    $this->load->view('admin/header',$array);
    $this->load->view('admin/outlet');
    $this->load->view('admin/footer');
  }
  public function tambah_outlet()
  {
    $this->form_validation->set_rules('kota_outlet', 'Kota_outlet', 'required|trim');
    $this->form_validation->set_rules('alamat_outlet', 'Alamat_outlet', 'required|trim');
    $this->form_validation->set_rules('notlp_outlet', 'Notlp_outlet', 'required|trim|numeric');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/header');
      $this->load->view('admin/tambah_outlet');
      $this->load->view('admin/footer');

    }else{
      $nama=$this->input->post('kota_outlet');
      $foto = $_FILES['foto'];
      $metode_pembayaran=$this->input->post('metode_pembayaran');
      if (count($foto) == 0) {
      } else {
        $config['upload_path']          = './assets/images/outlet/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name'] = $nama;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
          $foto = '';
        } else {
          //jika foto berhasil di upload
          $foto = $this->upload->data('file_name');
        }
      }
      $insert=array(
        'kota'=>$this->input->post('kota_outlet'),
        'alamat'=>$this->input->post('alamat_outlet'),
        'no_tlp'=>$this->input->post('notlp_outlet'),
        'foto'=>$foto,
      );
      $this->Admin_model->tambah_outlet($insert);
      $this->session->set_flashdata('msg', 'Data Rekening Berhasil Di Tambah');
      redirect('admin/outlet');
    }
    
  }
  public function edit_outlet($id=null){
    $edit = $this->db->get_where('outlet', ['id_outlet' => $id])->row_array();    
    $array = array(
      'edit'=>$edit,
    );
    
    $this->form_validation->set_rules('id_outlet', 'Id_outlet', 'required|trim');
    $this->form_validation->set_rules('notlp_outlet', 'Notlp_outlet', 'required|trim|numeric');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/header',$array);
      $this->load->view('admin/edit_outlet');
      $this->load->view('admin/footer');
    }else{
      $id=$this->input->post('id_outlet');
      $nama_file_lm=$this->input->post('foto_lama');
      $file = $_FILES['foto'];
      if ($file['name'] == '') {
        $update=array(
          'kota'=>$this->input->post('kota_outlet'),
          'alamat'=>$this->input->post('alamat_outlet'),
          'no_tlp'=>$this->input->post('notlp_outlet'),
          'foto'=>$nama_file_lm,
        );
        // $this->session->set_flashdata('msgeror', 'Foto Tidak Dirubah');
      } else {
        $nama_file=$this->input->post('kota_outlet');
        $config['upload_path'] = './assets/images/oulet/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nama_file;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
          $this->session->set_flashdata('msgeror', 'Gagal Edit Logo Format Image Salah!!!');
          redirect('Admin/outlet');
        } else {
          $nama_file = $this->upload->data('file_name');
          // if ($foto_lm == 'default.jpg') {
          // } else {
          //   unlink('./assets/img/profil/' . $foto_lm);
          // }
          $update=array(
            'kota'=>$this->input->post('kota_outlet'),
            'alamat'=>$this->input->post('alamat_outlet'),
            'no_tlp'=>$this->input->post('notlp_outlet'),
            'foto'=>$nama_file,
          ); 
          $this->session->set_flashdata('msg', 'Data Rekening Berhasil Di Edit');
        } 
      }
      $this->Admin_model->edit_outlet($id,$update);
      redirect('admin/outlet');
    }
  }
  public function hapus_outlet($id){
    $hapus = $this->db->get_where('outlet', ['id_outlet' => $id])->row_array();
    unlink('assets/images/oulet/'.$hapus['foto']); 
    $this->Admin_model->hapus_outlet($id);
    $this->session->set_flashdata('msg', 'Data Rekening Berhasil Di Hapus');
    redirect('admin/outlet');
  }
  public function koleksi()
  {
     
    
    $this->load->view('admin/header');
    $this->load->view('admin/koleksi');
    $this->load->view('admin/footer');
  }

}



/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */