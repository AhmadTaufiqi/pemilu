<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Home";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/admin_menubar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function menu()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Management Menu";
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules(
            'menu',
            'Menu',
            'required',
            [
                'required' => 'Nama Menu tidak boleh kosong'

            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/menubar', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('templates/footer', $data);
        } else {

            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
           Menu berhasil ditambahkan</div>');
            redirect('admin/menu');
        }
    }



    public function updateMenu($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Edit Menu";
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required', [
            'required' => 'Nama Menu tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/menubar', $data);
            $this->load->view('admin/menu-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "menu" => $this->input->post('menu')
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
           Menu berhasil diubah</div>');
            redirect('admin/menu');
        }
    }

    public function hapusMenu($id)
    {


        $this->db->where('id', $id);
        $this->db->delete('user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
        Menu berhasil dihapus</div>');
        redirect('admin/menu');
    }

    public function navbarMenu()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Navbar Menu";
        $data['submenu'] = $this->M_admin->getNavbarMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules(
            'menu-nav',
            'Menu-nav',
            'required',
            [
                'required' => 'Nama Menu tidak boleh kosong'

            ]
        );
        $this->form_validation->set_rules(
            'menu_id',
            'Menu_id',
            'required',
            [
                'required' => 'Role tidak boleh kosong'

            ]
        );
        $this->form_validation->set_rules(
            'url',
            'Url',
            'required',
            [
                'required' => 'URL tidak boleh kosong'

            ]
        );
        $this->form_validation->set_rules(
            'icon',
            'Icon',
            'required',
            [
                'required' => 'Icon tidak boleh kosong'

            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/menubar', $data);
            $this->load->view('admin/navbar-menu', $data);
            $this->load->view('templates/footer', $data);
        } else {

            $data = [
                "menu_id" => $this->input->post('menu_id'),
                "title" => $this->input->post('menu-nav'),
                "url" => $this->input->post('url'),
                "icon" => $this->input->post('icon'),
                "is_active" => $this->input->post('is_active')


            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
           Menu berhasil ditambahkan</div>');
            redirect('admin/navbarmenu');
        }
    }

    public function updateNavbarMenu($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Edit Navbar Menu";
        $data['submenu'] = $this->db->get('user_menu')->result_array();
        $data['submenu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required', [
            'required' => 'Nama Menu tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/menubar', $data);
            $this->load->view('admin/menu-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "menu_id" => $this->input->post('menu_id'),
                "title" => $this->input->post('menu-nav'),
                "url" => $this->input->post('url'),
                "icon" => $this->input->post('icon'),
                "is_active" => $this->input->post('is_active')


            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
           Menu berhasil diubah</div>');
            redirect('admin/navbarmenu');
        }
    }

    public function hapusNavbarMenu($id)
    {


        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
        Menu berhasil dihapus</div>');
        redirect('admin/navbarmenu');
    }
}
