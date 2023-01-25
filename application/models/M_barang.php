<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function delete($id_brg)
  {
    $this->db->delete('barang', array('id_brg' => $id_brg)); 
  }

  public function insert($data)
  {
    $this->db->insert('barang', $data);
  }

  public function update($data,$where){
    $this->db->where($where);
    $this->db->update('barang',$data);
  }
}
