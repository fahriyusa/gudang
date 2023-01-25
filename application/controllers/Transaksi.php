<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi');
    }

    public function index()
    {
        $data['wr'] = $this->db->get('warga')->result();
        $data['brg'] = $this->db->get('barang')->result();
        $data['data'] = $this->db->query('SELECT *,
                                          CASE WHEN
                                          jenis = "p" THEN "Peminjaman"
                                          ELSE "Pengembalian" 
                                          END AS status_cuy 
                                          FROM transaksi 
                                          JOIN barang 
                                          ON transaksi.id_brg = barang.id_brg 
                                          JOIN warga 
                                          ON transaksi.id_wr = warga.id_wr');
        $this->load->view('/template/header');
        $this->load->view('/template/navbar');
        $this->load->view('transaksi', $data);
        $this->load->view('/template/footer');
    }

    public function insert()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $jenis = $this->input->post('jenis');
        $id_brg = $this->input->post('id_brg');
        $id_wr = $this->input->post('id_wr');
        $acara = $this->input->post('acara');
        $alamat = $this->input->post('alamat');
        $ket = $this->input->post('ket');
        $jml = $this->input->post('jml');
        $tgl_p = $this->input->post('tgl_p');
        $tgl_k = $this->input->post('tgl_k');
        $data = array(
            'id_transaksi' => $id_transaksi,
            'jenis' => $jenis,
            'id_brg' => $id_brg,
            'id_wr' => $id_wr,
            'acara' => $acara,
            'alamat' => $alamat,
            'ket' => $ket,
            'jml' => $jml,
            'tgl_p' => $tgl_p,
            'tgl_k' => $tgl_k
        );
        $this->M_transaksi->insert($data, 'transaksi');
        redirect('Transaksi');
    }

    public function update($id)
    {
        $data['row']=$this->M_transaksi->wkwk($id);
        $data['wr'] = $this->db->get('warga')->result();
        $data['brg'] = $this->db->get('barang')->result();
       
        $this->load->view('/template/header');
        $this->load->view('/template/navbar');
        $this->load->view('update/kas', $data);
        $this->load->view('/template/footer');
    }

    public function simpan()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $jenis = $this->input->post('jenis');
        $id_brg = $this->input->post('id_brg');
        $id_wr = $this->input->post('id_wr');
        $acara = $this->input->post('acara');
        $alamat = $this->input->post('alamat');
        $ket = $this->input->post('ket');
        $jml = $this->input->post('jml');
        $tgl_p = $this->input->post('tgl_p');
        $tgl_m = $this->input->post('tgl_m');
        $data = array(
            'id_transaksi' => $id_transaksi,
            'jenis' => $jenis,
            'id_brg' => $id_brg,
            'id_wr' => $id_wr,
            'acara' => $acara,
            'alamat' => $alamat,
            'ket' => $ket,
            'jml' => $jml,
            'tgl_p' => $tgl_p,
            'tgl_m' => $tgl_m);

        $where = array(
            'id_Transaksi' => $id_transaksi,
        );
        $this->M_transaksi->update($data, $where);
        redirect('Transaksi');
    }

    public function delete($id_kas)
    {
        $id_kas = $this->uri->segment(3);
        $this->M_kas->delete($id_kas);
        redirect('kas');
    }
}
