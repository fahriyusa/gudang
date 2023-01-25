<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_barang');
  }

  public function index()
  {
    $data['brg'] = $this->db->get('barang')->result();

    $this->load->view('/template/header');
    $this->load->view('/template/navbar');
    $this->load->view('barang', $data);
    $this->load->view('/template/footer');

  }

  public function insert()
  {
    $nm_brg = $this->input->post('nm_brg');
    $jml_brg = $this->input->post('jml_brg');
    $satuan = $this->input->post('satuan');
    $ket_brg = $this->input->post('ket_brg');
    $data = array(
      'nm_brg' => $nm_brg,
      'jml_brg' => $jml_brg,
      'satuan' => $satuan,
      'ket_brg' => $ket_brg
    );
    $this->M_barang->insert($data, 'barang');
    redirect('Barang');
  }

  public function update($id_brg)
  {
    $where = array(
      'id_brg' => $id_brg,
    );
    $p = $this->db->get_where('barang', $where)->row();
    $data = array('data' => $p);
    $this->load->view('/template/header');
    $this->load->view('/template/navbar');
    $this->load->view('update/barang', $data);
    $this->load->view('/template/footer');
  }

  public function simpan()
  {
    $id_brg = $this->input->post('id_brg');
    $nm_brg = $this->input->post('nm_brg');
    $jml_brg = $this->input->post('jml_brg');
    $satuan = $this->input->post('satuan');
    $ket_brg = $this->input->post('ket_brg');
    $data = array(
      'nm_brg' => $nm_brg,
      'jml_brg' => $jml_brg,
      'satuan' => $satuan,
      'ket_brg' => $ket_brg,
    );
    $where = array(
      'id_brg' => $id_brg,
    );
    $this->M_barang->update($data, $where);
    redirect('Barang');
  }

  public function delete($id_brg)
  {
    $id_brg = $this->uri->segment(3);
    $this->M_barang->delete($id_brg);
    redirect('Barang');
  }

}