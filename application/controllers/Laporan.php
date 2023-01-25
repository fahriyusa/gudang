<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function anggota()
	{
        $data['title'] = "List-Anggota";
        $data['anggota'] = $this->db->get('warga')->result();
        $this->load->view('report/anggota', $data);
    }
    public function barang()
	{
        $data['title'] = "List-Barang";
        $data['brg'] = $this->db->get('barang')->result();
        $this->load->view('report/barang', $data);
    }
    public function kas()
	{
        $data['title'] = "Laporan-kas";
        $data['kas'] = $this->db->query('
        SELECT *
        ,CASE WHEN
        jenis = "m" THEN "Masuk" 
        ELSE "Keluar" 
        END AS jeniss
        FROM kas JOIN warga
        WHERE kas.id_wr = warga.id_wr')->result();
        $this->load->view('report/kas', $data);
    }
}