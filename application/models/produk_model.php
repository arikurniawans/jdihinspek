<?php

class produk_model extends CI_Model
{
    var $user_tb = "user_tb";

    public function logged_in()
    {
        return $this->session->userdata('id_user');
    }

    public function simpanproduk($data)
    {
        $this->db->insert('produkhukum_tb',$data);
    }
}