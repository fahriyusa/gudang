<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_informasi extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    //   public function delete($id_brg)
//   {
//     $this->db->delete('barang', array('id_brg' => $id_brg)); 
//   }

    //   public function insert($data)
//   {
//     $this->db->insert('barang', $data);
//   }

    public function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('info_gudang', $data);
    }
}