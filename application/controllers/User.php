<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Home";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/menubar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function useracc()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "User";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/menubar', $data);
        $this->load->view('user/user-acc', $data);
        $this->load->view('templates/footer', $data);
    }

    public function relawan()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Relawan";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/menubar', $data);
        $this->load->view('user/relawan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function addRelawan()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Tambah Data Relawan";

        if($this->input->post()){
            $input = $this->input->post();
            $data_save = array(
                'nik' => $input['nik'],
                'nama' => $input['nama'],
                'gender' => $input['gender'],
                'propinsi' => $input['propinsi'],
                'kabupaten' => $input['kabupaten'],
                'kota' => $input['kota'],
                'kecamatan' => $input['kecamatan'],
                'kelurahan' => $input['kelurahan'],
                'rw' => $input['rw'],
                'rw' => $input['rw'],
                'tps' => $input['tps'],
                'inputter' => $input['inputter'],
                'created_at' => now()
            );
            if($input['relawan_id']){
                $this->db->update('relawan',['relawan_id' => $input['relawan_id']]);
            }else{
                $this->db->insert('relawan',$data);
            }

        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/menubar', $data);
        $this->load->view('user/add-relawan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ExportRelawan(){

    }
}
