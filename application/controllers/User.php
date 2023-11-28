<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_app');
        if (empty($this->session->userdata('id_akun'))) {
            redirect(base_url('auth'));
        }
    }

    public function index()
    {
        $user_role = $this->session->userdata('role_id');
        $input = $this->input->post();

        if (isset($input['cari_submit'])) {
            $this->db->like('nama', $input['nama']);
            $this->db->like('username', $input['username']);
        }
        $data['user'] = $this->db->select('*')->from('user')
            ->get()->result_object();

        $data['title'] = "Home";
        if ($user_role == 1) {
            $this->M_app->template($data, 'admin/list_users');
        } else {
            $this->M_app->template($data, 'user/list_users');
        }
    }

    public function addUser()
    {
        $user_role = $this->session->userdata('role_id');
        if ($user_role == 2) {
            redirect(base_url() . 'user');
        }
        $input = $this->input->post();
        if ($input) {
            $insert_data = array(
                'nama' => $input['nama'],
                'username' => $input['username'],
                'role_id' => 2,
                'password' => md5($input['password']),
                'created_at' => $this->M_app->date()
            );
            $this->db->insert('user', $insert_data);
            $this->session->set_flashdata('message', '<h1 class="text-success">success</h1>');
            redirect(base_url() . 'user');
        }

        $data['title'] = "Tambah User";
        $data['action'] = "Tambah";
        $data['form'] = "user/adduser";

        $this->M_app->template($data, 'admin/form_user');
    }
    public function editUser()
    {
        $user_role = $this->session->userdata('role_id');
        if ($user_role == 2) {
            redirect(base_url() . 'user');
        }
        $user_id = $this->input->get('user_id');
        $data['user'] = $this->db->get_where('user', ['id' => $user_id])->row_object();

        $input = $this->input->post();
        if ($input) {
            $user_id = $input['user_id'];
            $update_data = array(
                'nama' => $input['nama'],
                'username' => $input['username'],
                'updated_at' => $this->M_app->date()
            );
            if ($user_id != $this->session->userdata('id_akun')) {
                $update_data['role_id'] = 2;
            }
            if (trim($input['password']) != '') {
                $update_data['password'] = md5($input['password']);
            }
            $this->db->update('user', $update_data, ['id' => $user_id]);
            $this->session->set_flashdata('message', '<h1 class="text-success">success</h1>');
            redirect(base_url() . 'user');
        }

        $data['title'] = "Tambah User";
        $data['action'] = "Edit";
        $data['form'] = "user/edituser";

        $this->M_app->template($data, 'admin/form_user');
    }

    public function delData(){
        $id = $this->input->get('user_id');
        $this->db->delete('user',['id'=>$id]);
        $this->session->set_flashdata('message', '<h1 class="text-success">success</h1>');
        redirect('user');
    }

    function CheckUsername()
    {
        $username = $this->input->post('username');
        $id = $this->input->post('id');
        $result = $this->db->select('*')
            ->from('user')
            ->where('username', $username)
            ->where('id <>', $id)
            ->get()->result_object();
        echo count($result);
    }
}
