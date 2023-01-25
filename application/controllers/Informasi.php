<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_informasi');
  }

  public function index()
  {
    $data['informasi'] = $this->db->get('info_gudang')->result();

    $this->load->view('/template/header');
    $this->load->view('/template/navbar');
    $this->load->view('informasi', $data);
    $this->load->view('/template/footer');

  }

  public function update($id_gdg)
  {
    $where = array(
      'id_gdg' => $id_gdg,
    );
    $p = $this->db->get_where('info_gudang', $where)->row();
    $data = array('data' => $p);
    $this->load->view('/template/header');
    $this->load->view('/template/navbar');
    $this->load->view('update/informasi', $data);
    $this->load->view('/template/footer');
  }

  public function simpan()
  {
    $id_gdg = $this->input->post('id_gdg');
    $nm_gdg = $this->input->post('nm_gdg');
    $alamat_gdg = $this->input->post('alamat_gdg');
    $ketua = $this->input->post('ketua');
    $wakil_ketua = $this->input->post('wakil_ketua');
    $sekertaris = $this->input->post('sekertaris');
    $bendahara = $this->input->post('bendahara');
    $kunci = $this->input->post('kunci');
    $data = array(
      'nm_gdg' => $nm_gdg,
      'alamat_gdg' => $alamat_gdg,
      'ketua' => $ketua,
      'wakil_ketua' => $wakil_ketua,
      'sekertaris' => $sekertaris,
      'bendahara' => $bendahara,
      'kunci' => $kunci,
    );
    $where = array(
      'id_gdg' => $id_gdg,
    );
    $this->M_informasi->update($data, $where);
    redirect('Informasi');
  }

}


/* End of file Informasi.php */
/* Location: ./application/controllers/Informasi.php */