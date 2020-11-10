<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{
    public function index()
    {
        $this->load->model('M_anggota');

        $data['data_anggota'] = $this->M_anggota->t_anggota()->result();

        // var_dump($data);
        // die;

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/anggota/list_anggota', $data);
        $this->load->view('admin/footer');
    }
}