<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_anggota');
  }

  // public function pdf(){
  //   $data['judul'] = "cetak anggota"
  // }
  public function index()
  {
    $data['anggota'] = $this->db->get('warga')->result();

    $this->load->view('/template/header');
    $this->load->view('/template/navbar');
    $this->load->view('anggota', $data);
    $this->load->view('/template/footer');

  }
  public function insert()
  {
    $nama_wr = $this->input->post('nama_wr');
    $alamat_wr = $this->input->post('alamat_wr');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $no_tlp_wr = $this->input->post('no_tlp_wr');
    $data = array(
      'nama_wr' => $nama_wr,
      'alamat_wr' => $alamat_wr,
      'rt' => $rt,
      'rw' => $rw,
      'no_tlp_wr' => $no_tlp_wr,
    );
    $this->M_anggota->insert($data, 'warga');
    redirect('Anggota');
  }

  public function update($id_wr)
  {
    $where = array(
      'id_wr' => $id_wr,
    );
    $p = $this->db->get_where('warga', $where)->row();
    $data = array('data' => $p);
    $this->load->view('/template/header');
    $this->load->view('/template/navbar');
    $this->load->view('update/anggota', $data);
    $this->load->view('/template/footer');
  }

  public function simpan()
  {
    $id_wr = $this->input->post('id_wr');
    $nama_wr = $this->input->post('nama_wr');
    $alamat_wr = $this->input->post('alamat_wr');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $no_tlp_wr = $this->input->post('no_tlp_wr');
    $data = array(
      'nama_wr' => $nama_wr,
      'alamat_wr' => $alamat_wr,
      'rt' => $rt,
      'rw' => $rw,
      'no_tlp_wr' => $no_tlp_wr,
    );
    $where = array(
      'id_wr' => $id_wr,
    );
    $this->M_anggota->update($data, $where);
    redirect('Anggota');
  }

  public function delete($id_wr)
  {
    $id_wr = $this->uri->segment(3);
    $this->M_anggota->delete($id_wr);
    redirect('Anggota');
  }

}