<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function delete($id_user)
  {
    $this->db->delete('login', array('id_user' => $id_user)); 
  }

  public function insert($data)
  {
    $this->db->insert('login', $data);
  }

  public function update($data,$where){
    $this->db->where($where);
    $this->db->update('login',$data);
  }
}
