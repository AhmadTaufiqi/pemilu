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
        $kel_id = $this->input->post('kel_id');
        $kab_id = [3271, 3203];
        if ($kel_id) {
            $this->db->where('v.id', $kel_id);
        }
        $data = $this->db->select('d.id as kecamatan_id,d.name as kecamatan,
            p.id as provinsi_id,p.name as provinsi,
            r.name as kabupaten,r.id as kabupaten_id,
            v.name as kelurahan,v.id as kelurahan_id')
            ->from('districts d')
            ->join('regencies r', 'r.id=d.regency_id', 'inner')
            ->join('provinces p', 'p.id=r.province_id', 'inner')
            ->join('villages v', 'd.id=v.district_id', 'inner')
            ->where_in('d.regency_id', $kab_id)
            ->get()->result_object();
        // $data = $this->db->select('v.*')
        // ->from('villages v')
        // ->join('districts d','d.id=v.district_id','inner')
        // ->join('regencies r','r.id=d.regency_id','inner')
        // ->where_in('district_id', $kab_id)
        // ->get()->result_object();
        echo json_encode($data);
    }
}
