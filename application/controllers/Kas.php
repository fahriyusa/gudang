<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kas');
    }

    public function index()
    {
        $data = array(

            'wr' => $this->db->query('select id_wr,nama_wr from warga'),
            'kas' => $this->db->query('
    SELECT *
    ,CASE WHEN
    jenis = "m" THEN "Masuk" 
    ELSE "Keluar" 
    END AS status_txt 
    FROM kas JOIN warga
    WHERE kas.id_wr = warga.id_wr')->result(),
        );

        $this->load->view('/template/header');
        $this->load->view('/template/navbar');
        $this->load->view('kas', $data);
        $this->load->view('/template/footer');
    }

    public function insert()
    {
        $id_wr = $this->input->post('id_wr');
        $jenis = $this->input->post('jenis');
        $nama_kas = $this->input->post('nama_kas');
        $ket = $this->input->post('ket');
        $jml = $this->input->post('jml');
        $tgl_kas = $this->input->post('tgl_kas');
        $data = array(
            'id_wr' => $id_wr,
            'jenis' => $jenis,
            'nama_kas' => $nama_kas,
            'ket' => $ket,
            'jml' => $jml,
            'tgl_kas' => $tgl_kas
        );
        $this->M_kas->insert($data, 'kas');
        redirect('Kas');
    }

    public function update($id)
    {
        $data['row']=$this->M_kas->wkwk($id);
        $data['wr'] = $this->db->get('warga')->result();
        // $where = array(
        //     'id_kas' => $id_kas
        // );

        // $row = $this->m_kas->wkwk($id);
        // $wr = $this->db->get('warga')->result();
        // $p = $this->db->get_where('kas', $where)->row();
        // $data = array(
        //     'data' => $p,
        //     'wr' => $wr,
        //     'row' => $row
        // );
        $this->load->view('/template/header');
        $this->load->view('/template/navbar');
        $this->load->view('update/kas', $data);
        $this->load->view('/template/footer');
    }

    public function simpan()
    {
        $id_kas = $this->input->post('id_kas');
        $id_wr = $this->input->post('id_wr');
        $jenis = $this->input->post('jenis');
        $nama_kas = $this->input->post('nama_kas');
        $ket = $this->input->post('ket');
        $jml = $this->input->post('jml');
        $tgl_kas = $this->input->post('tgl_kas');
        $data = array(
            'id_wr' => $id_wr,
            'jenis' => $jenis,
            'nama_kas' => $nama_kas,
            'ket' => $ket,
            'jml' => $jml,
            'tgl_kas' => $tgl_kas
        );
        $where = array(
            'id_kas' => $id_kas,
        );
        $this->M_kas->update($data, $where);
        redirect('Kas');
    }

    public function delete($id_kas)
    {
        $id_kas = $this->uri->segment(3);
        $this->M_kas->delete($id_kas);
        redirect('kas');
    }
}