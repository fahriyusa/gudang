<?php
defined('BASEPATH') or exit('No Direct script access allowed');

class M_login extends CI_Model
{
    private $_table = "login";
    const SESSION_KEY = 'id_user';

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_lenght[50]'

            ]
        ];
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get($this->_table);
        $user = $query->row();

        // cek apakah user sudah terdaftar
        if (!$user) {
            return FALSE;
        }

        //cek apakah passwordnya benar?
        if (!password_verify($password, $user->password)) {
            return FALSE;
        }

        //membuat session
        $this->session->set_userdata([self::SESSION_KEY => $user->id_user]);
        // $this->_update_last_login($user->id_anggota);

        return $this->session->has_userdata(self::SESSION_KEY);

    }

    public function current_user()
    {
        if (!$this->session->userdata('username')) {
            return null;
        }

        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where($this->_table, ['id_user' => $user_id]);
        return $query->row();
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        return redirect('login');
    }

    public function selectuser($username)
    {
        $user = $this->db->get_where('login', ['username' => $username])->row_array();
        return $user;
    }
}