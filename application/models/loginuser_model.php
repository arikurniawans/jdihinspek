<?php

class loginuser_model extends CI_Model
{
    var $user_tb = "user_tb";

    public function logged_in()
    {
        return $this->session->userdata('id_user');
    }


    public function insertusert($data)
    {
        $this->db->insert('user_tb',$data);
    }

}