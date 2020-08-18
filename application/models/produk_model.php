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
	
	public function lihatproduk()
    {
        $this->db->select('*');
		$this->db->from('produkhukum_tb');
		$this->db->order_by('id_produk ');
		$query = $this->db->get();
		return $query;
    }
}