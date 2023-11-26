<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_app extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function template($data, $content)
  {
    $role = $this->session->userdata('role_id');
    if($role == 1){
      $menubar = 'admin_menubar';
    }else{
      $menubar = 'user_menubar';
    }
    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    // $this->load->view('templates/menubar');
    $this->load->view('templates/'.$menubar);
    $this->load->view($content);
    $this->load->view('templates/footer');
  }

  public function date()
  {
    date_default_timezone_set('Asia/Jakarta');
    return date('Y-m-d');
  }

  public function datetime()
  {
    date_default_timezone_set('Asia/Jakarta');
    return date('Y-m-d H:m:s');
  }

  public function upload_config($path)
  {
    if (!is_dir($path))
      mkdir($path, 0777, TRUE);
    $config['upload_path']   = './' . $path;
    $config['allowed_types'] = 'csv|CSV|xlsx|XLSX|xls|XLS';
    $config['max_filename']   = '255';
    $config['encrypt_name'] = TRUE;
    $config['max_size']  = 4096;
    $this->load->library('upload');
    $this->upload->initialize($config);
  }

  public function select($select, $table, $by = 'created_at', $order = 'DESC')
  {
    return $this->db->select($select)
      ->from($table)
      ->order_by($by, $order)
      ->get();
  }

  public function select_join_2table($select, $table, $table2, $on, $by = 'created_at', $order = 'DESC')
  {
    return $this->db->select($select)
      ->from($table)
      ->join($table2, $on)
      ->order_by($by, $order)
      ->get();
  }
}
