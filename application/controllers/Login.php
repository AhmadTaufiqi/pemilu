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
            if (md5($password) == $user['password']) {

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


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Logout!</div>');
        redirect('login');
    }
}
