<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_app');
        if (empty($this->session->userdata('id_akun'))) {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['user_role'] = $this->session->userdata('role_id');
        $data['title'] = "Home";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['qrelawan'] = $this->db->select('r.*,u.nama inputter')
            ->from('relawan r')
            ->join('user u', 'r.created_by=u.id', 'inner')
            ->get()->result();

        // echo json_encode($data['user_role']);
        $this->M_app->template($data, 'relawan/relawan');
    }
    public function addRelawan()
    {
        $created_by = $this->session->userdata('id_akun');
        $input = $this->input->post();
        if ($input) {
            $insert_data = array(
                'nik' => $input['nik'],
                'nama' => $input['nama'],
                'telepon' => $input['telepon'],
                'gender' => $input['gender'],
                'provinsi' => $input['provinsi'],
                'kabupaten' => $input['kabupaten'],
                'kecamatan' => $input['kecamatan'],
                'desa' => $input['desa'],
                'rt' => $input['rt'],
                'rw' => $input['rw'],
                'tps' => $input['tps'],
                'created_by' => $created_by,
                'created_at' => $this->M_app->date(),
            );
            $this->db->insert('relawan', $insert_data);
            $this->session->set_flashdata('message', '<h1 class="text-success">success</h1>');
            echo json_encode($input);
        }

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['action'] = "Tambah Relawan";
        $data['title'] = "Home";

        $this->M_app->template($data, 'relawan/form_relawan');
    }
    public function editRelawan()
    {
        $input = $this->input->post();
        if ($input) {
            $update_data = array(
                'nik' => $input['nik'],
                'nama' => $input['nama'],
                'telepon' => $input['telepon'],
                'gender' => $input['gender'],
                'provinsi' => $input['provinsi'],
                'kabupaten' => $input['kabupaten'],
                'kecamatan' => $input['kecamatan'],
                'desa' => $input['desa'],
                'rt' => $input['rt'],
                'rw' => $input['rw'],
                'tps' => $input['tps'],
                'updated_at' => time(now()),
            );
            $this->db->update('relawan', ['id' => $input['relawan_id']], $update_data);
            $this->session->set_flashdata('message', '<h1 class="text-success">success</h1>');
            echo json_encode($input);
        }

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['action'] = "Edit Relawan";
        $data['title'] = "Home";

        $this->M_app->template($data, 'relawan/form_relawan');
    }

    public function dashboard()
    {
        $data['title'] = 'dashboard';
        $date = date('Y-m-d', strtotime($this->M_app->date() . "-5 day"));
        $label = [];
        $total = [];
        for ($i = 0; $i < 5; $i++) {
            $date = date('Y-m-d', strtotime($date . "+1 day"));
            $qdate = $this->db->select('*')
            ->from('relawan')
            ->where('created_at', $date)
            ->order_by('created_at')
            ->get()->result_object();
            $label[$i] = $date;
            $total[$i] = count($qdate);
        }
        $data['label'] = $label;
        $data['total'] = $total;
        // $data['chart']['days'] = json_encode(['senin', 'selasa']);
        $this->M_app->template($data, 'dashboard');
    }
}
