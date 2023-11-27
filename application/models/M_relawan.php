<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_relawan extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getDataRelawan()
  {
    $filter = $this->input->post('submit_filter');
    if ($filter) {
      $input = $this->input->post();
      $this->db->like('r.nik', $input['filter_nik']);
      $this->db->like('r.nama', $input['filter_nama']);
      if ($input['filter_inputter'] != '') {
        $this->db->where('r.created_by', $input['filter_inputter']);
      }
      if ($input['filter_kelurahan'] != '') {
        $this->db->where('r.kelurahan', $input['filter_kelurahan']);
      }
    }

    $data = $this->db->select('rw.*,rw.created_by,u.nama as inputter,p.name as provinsi, v.name as kabupaten, d.name as kecamatan, v.name as kelurahan')
      ->from('relawan rw')
      ->join('user u', 'rw.created_by=u.id', 'inner')
      ->join('villages v', 'v.id=rw.kelurahan')
      ->join('districts d', 'd.id=v.district_id')
      ->join('regencies r', 'r.id=d.regency_id')
      ->join('provinces p', 'p.id=r.province_id')
      ->get()->result_object();
    return $data;
  }
}
