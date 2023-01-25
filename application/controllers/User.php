<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['user'] = $this->db->get('login')->result();

        $this->load->view('/template/header');
        $this->load->view('/template/navbar');
        $this->load->view('user', $data);
        $this->load->view('/template/footer');

    }

    public function insert()
    {
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $user = $this->input->post('user');
        $data = array(
            'username' => $username,
            'password' => $password,
            'user' => $user,
        );
        $this->M_user->insert($data, 'login');
        redirect('User');
    }

    public function update($id_user)
    {
        $where = array(
            'id_user' => $id_user,
        );
        $p = $this->db->get_where('login', $where)->row();
        $data = array('data' => $p);
        $this->load->view('/template/header');
        $this->load->view('/template/navbar');
        $this->load->view('update/user', $data);
        $this->load->view('/template/footer');
    }

    public function simpan()
    {
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $user = $this->input->post('user');
        $data = array(
            'username' => $username,
            'password' => $password,
            'user' => $user,
        );
        $where = array(
            'id_user' => $id_user,
        );
        $this->M_user->update($data, $where);
        redirect('User');
    }

    public function delete($id_user)
    {
        $id_user = $this->uri->segment(3);
        $this->M_user->delete($id_user);
        redirect('user');
    }

}