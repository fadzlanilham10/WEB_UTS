<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Controller{
    public function get_data(){
        $query = "SELECT * from tbl_anggota";
        $data = $this->db->query($query)->result_array();
       return $data;
    }
}