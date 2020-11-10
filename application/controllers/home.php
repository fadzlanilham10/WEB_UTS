<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller{
    public function index(){
        $this->load->model('M_anggota', 'ma');
        $data['data'] = $this->ma->get_data();
        $this->load->view('depan/isi.php',$data);
    }
}