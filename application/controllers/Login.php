<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim',
            [
                'required' => 'Username tidak boleh kosong'

            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]',
            [
                'required' => 'Password tidak boleh kosong',
                'min_length' => 'Password harus berisi minimal 5 karakter'
            ]
        );


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/login');
        } else {

            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //Jika Username terdaftar
        if ($user) {
            //Cek password
            // if (password_verify($password, $user['password'])) {
            if ($password == $user['password']) {

                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'id_akun' => $user['id']
                ];
                $this->session->set_userdata($data);
                //cek role id nya
                redirect('relawan/dashboard');
                // if ($user['role_id'] == 1) {
                // } else {
                //     redirect('user');
                // }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-important alert-danger role="alert">
                Username/Password Salah</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-important alert-danger role="alert">
            Username/Password Salah</div>');
            redirect('login');
        }
    }



    public function register()
    {
        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim',
            ['required' => 'Nama Lengkap tidak boleh kosong']
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[user.username]',
            [
                'required' => 'Username tidak boleh kosong',
                'is_unique' => 'Username sudah terdaftar'

            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[password1]',
            [
                'required' => 'Password tidak boleh kosong',
                'min_length' => 'Password harus berisi minimal 5 karakter',
                'matches' => 'Password tidak sama'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|matches[password]',
            [
                'required' => 'Konfirmasi password tidak boleh kosong',
                'matches' => 'Password tidak sama'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/register');
        } else {
            $data = [
                "name" => htmlspecialchars($this->input->post('name', true)),
                "username" => htmlspecialchars($this->input->post('username', true)),
                "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                "role_id" => 2,
                "date_created" => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun Berhasil Dibuat, Silahkan Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Logout!</div>');
        redirect('login');
    }
}
