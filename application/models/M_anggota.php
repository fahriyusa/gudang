<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function delete($id_wr)
  {
    $this->db->delete('warga', array('id_wr' => $id_wr)); 
  }

  public function insert($data)
  {
    $this->db->insert('warga', $data);
  }

  public function update($data,$where){
    $this->db->where($where);
    $this->db->update('warga',$data);
  }
}
