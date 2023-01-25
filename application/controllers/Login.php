<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

	public function index()
	{
        $this->load->view('/template/header');
		$this->load->view('auth/login');
        $this->load->view('/template/footer');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->M_login->selectuser($username);
        if($user){
            if(password_verify($password, $user['password'])){
                $data = [
                    'username' => $user['username'],
                    'password' => $user['password']
                ];
                $this->session->set_userdata($data);
                redirect('Home');
            }else{
                $this->session->set_flashdata(
                    'message',
                    '<div class="salah">'
                );
                redirect('Login');
            }
        }else{
            $this->session->set_flashdata(
                'message',
                '<div vlass="tidakada">'
            );
            redirect('login');
        }
    }

    public function logout()
    {
        $this->M_login->logout();
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}