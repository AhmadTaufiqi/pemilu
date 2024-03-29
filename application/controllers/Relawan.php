<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Relawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_app');
        $this->load->model('M_relawan');
        if (empty($this->session->userdata('id_akun'))) {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['user_role'] = $this->session->userdata('role_id');
        $data['title'] = "Data Relawan";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['qinputter'] = $this->db->get_where('user', ['role_id' => 2])->result_object();

        $data['qrelawan'] = $this->M_relawan->getDataRelawan();
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
                'kelurahan' => $input['desa'],
                'rt' => $input['rt'],
                'rw' => $input['rw'],
                'tps' => $input['tps'],
                'created_by' => $created_by,
                'created_at' => $this->M_app->date(),
            );
            $this->db->insert('relawan', $insert_data);
            $this->session->set_flashdata('message', 'success');
            redirect(base_url() . 'relawan');
        }

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['row_relawan'] = [];
        $data['action'] = "Tambah Data Relawan";
        $data['title'] = "Tambah Relawan";

        $this->M_app->template($data, 'relawan/form_relawan');
    }
    public function editRelawan()
    {
        $input = $this->input->post();
        if ($input) {
            $wil = $this->db->select('p.id prov,r.id kab,d.id cam')
                ->from('villages v')
                ->join('districts d', 'd.id=v.district_id')
                ->join('regencies r', 'r.id=d.regency_id')
                ->join('provinces p', 'p.id=r.province_id')
                ->where('v.id', $input['desa'])
                ->get()->row_object();

            $update_data = array(
                'nik' => $input['nik'],
                'nama' => $input['nama'],
                'telepon' => $input['telepon'],
                'gender' => $input['gender'],
                'provinsi' => $wil->prov,
                'kabupaten' => $wil->kab,
                'kecamatan' => $wil->cam,
                'kelurahan' => $input['desa'],
                'rt' => $input['rt'],
                'rw' => $input['rw'],
                'tps' => $input['tps'],
                'updated_at' => $this->M_app->date(),
            );
            $this->db->set($update_data);
            $this->db->where('id', $input['relawan_id']);
            $this->db->update('relawan');
            $this->session->set_flashdata('message', '<h1 class="text-success">success</h1>');
            redirect(base_url() . 'relawan');
        }

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['row_relawan'] = $this->db->get_where('relawan', ['id' => $this->input->get('id')])->row_object();
        $data['action'] = "Edit Data Relawan";
        $data['title'] = "Edit Relawan";

        $this->M_app->template($data, 'relawan/form_relawan');
    }

    public function detail()
    {
        $id = $this->input->post('id');
        $data = $this->db->select('r.*,u.nama as inputter,p.name as provinsi, k.name as kabupaten, d.name as kecamatan, v.name as kelurahan')
            ->from('relawan r')
            ->join('user u', 'r.created_by=u.id', 'inner')
            ->join('provinces p', 'r.provinsi=p.id', 'left')
            ->join('regencies k', 'r.kabupaten=k.id', 'left')
            ->join('districts d', 'r.kecamatan=d.id', 'left')
            ->join('villages v', 'r.kelurahan=v.id', 'left')
            ->where('r.id', $id)
            ->get()->row_object();
        echo json_encode($data);
    }

    public function nikCheck()
    {
        $nik = $this->input->post('nik');
        $data = $this->db->get_where('relawan', ['nik' => $nik])->result_array();
        echo json_encode(count($data));
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';

        // latest 5 day inputter
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

        // data top inputter terbanyak
        $data['data_tbl'] = $this->db->select('u.*,count(r.created_by) as total')
            ->from('user u')
            ->join('relawan r', 'r.created_by=u.id')
            ->where('u.role_id', '2')
            ->group_by('r.created_by')
            ->order_by('total', 'ASC')
            ->get()->result_object();

        $this->M_app->template($data, 'dashboard');
    }

    public function exportExcel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', "NIK");
        $sheet->setCellValue('B1', "NAMA");
        $sheet->setCellValue('C1', "GENDER");
        $sheet->setCellValue('D1', "TELEPON");
        $sheet->setCellValue('F1', "KELURAHAN");
        $sheet->setCellValue('F1', "KECAMATAN");
        $sheet->setCellValue('F1', "KABUPATEN");
        $sheet->setCellValue('E1', "PROVINSI");
        $sheet->setCellValue('G1', "TPS");
        $sheet->setCellValue('H1', "INPUTTER");

        $data = $this->db->select('r.*,u.nama inputter')
            ->from('relawan r')
            ->join('user u', 'r.created_by=u.id', 'inner')
            ->get()->result();

        $numrow = 2;
        foreach ($data as $d) {
            if ($d->gender == 'L') {
                $gender = 'Laki-Laki';
            } else {
                $gender = 'Perempuan';
            }

            $prov = $this->db->get_where('provinces', ['id' => $d->provinsi])->row_array();
            $kab = $this->db->get_where('regencies', ['id' => $d->kabupaten])->row_array();
            $cam = $this->db->get_where('regencies', ['id' => $d->kecamatan])->row_array();
            $desa = $this->db->get_where('regencies', ['id' => $d->kelurahan])->row_array();

            $provinsi = '';
            $kabupaten = '';
            $kecamatan = '';
            $kelurahan = '';
            if ($prov) {
                $provinsi = $prov['name'];
            }
            if ($kab) {
                $kabupaten = $kab['name'];
            }
            if ($cam) {
                $kecamatan = $cam['name'];
            }
            if ($desa) {
                $kelurahan = $desa['name'];
            }
            $sheet->setCellValue('A' . $numrow, $d->nik);
            $sheet->setCellValue('B' . $numrow, $d->nama);
            $sheet->setCellValue('C' . $numrow, $gender);
            $sheet->setCellValue('D' . $numrow, $d->telepon);
            $sheet->setCellValue('F' . $numrow, $kelurahan);
            $sheet->setCellValue('F' . $numrow, $kecamatan);
            $sheet->setCellValue('F' . $numrow, $kabupaten);
            $sheet->setCellValue('E' . $numrow, $provinsi);
            $sheet->setCellValue('G' . $numrow, $d->tps);
            $sheet->setCellValue('H' . $numrow, $d->inputter);

            $numrow++;
        }

        $sheet->setTitle("Data Kontrak");
        // Proses file excel
        header('Content-Type: application/ms-excel');
        header('Content-Disposition: attachment; filename="Data Kontrak.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }

    public function createRelawanUser()
    {
        // 3203 id kab cianjur
        // 3271 id kota bogor
        // $data = $this->db->query("SELECT v.name as kelurahan,p.name as prov,r.name as kab,d.name as cam FROM provinces p
        // INNER JOIN regencies r ON p.id=r.province_id
        // INNER JOIN districts d ON r.id=d.regency_id
        // INNER JOIN villages v ON d.id=v.district_id
        // WHERE r.id IN (3271)")->result_object();
        // $index = 2;
        // foreach ($data as $d) {
        //     $index++;
        //     $username = 'korkel_' . strtolower($d->kelurahan);
        //     $password = strtolower($d->kelurahan);
        //     echo $username;
        //     echo '&nbsp;&nbsp;&nbsp;&nbsp;';
        //     echo $password;
        //     echo '<br>';
        //     $this->db->where('username', $username);
        //     $data_check = $this->db->get('user')->result_array();
        // echo count($data_check);
        // if (count($data_check) == 0) {
        //     $data_insert = [
        //         'id' => $index,
        //         'nama' => 'INPUTTER',
        //         'username' => $username,
        //         'password' => md5($password),
        //         'role_id' => 2,
        //         'created_at' => $this->M_app->date()
        //     ];
        //     $this->db->insert('user', $data_insert);
        // }
        echo count($data);
    }
}
