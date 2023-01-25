<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kas extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function delete($id_kas)
  {
    $this->db->delete('kas', array('id_kas' => $id_kas)); 
  }

  public function insert($data)
  {
    $this->db->insert('kas', $data);
  }

  public function update($data,$where){
    $this->db->where($where);
    $this->db->update('kas',$data);
  }

  public function wkwk($id){
    return $this->db->join('warga', 'warga.id_wr = kas.id_wr')->get_where('kas', ['id_kas' => $id])->result();
  }
}
