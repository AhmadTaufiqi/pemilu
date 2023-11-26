<?php
defined('BASEPATH') or exit('No direct script access allowed');

class resWilayah extends CI_Controller
{

    public function getProv()
    {
        $data = $this->db->get('provinces')->result_object();
        echo json_encode($data);
    }
    public function getKab()
    {
        $province_id = $this->input->post('prov_id');
        $data = $this->db->get_where('regencies', ['province_id' => $province_id])->result_object();
        echo json_encode($data);
    }
    public function getCam()
    {
        $regency_id = $this->input->post('kab_id');
        $data = $this->db->get_where('districts', ['regency_id' => $regency_id])->result_object();
        echo json_encode($data);
    }
    public function getKelurahan()
    {
        $district_id = $this->input->post('cam_id');
        $data = $this->db->get_where('villages', ['district_id' => $district_id])->result_object();
        echo json_encode($data);
    }
}
