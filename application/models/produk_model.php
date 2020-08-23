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

    public function ubahproduk($id,$data)
    {
        $this->db->where('id_produk',$id);
        $this->db->update('produkhukum_tb',$data);
    }

    public function hapusproduk($id)
    {
        $this->db->where('id_produk',$id);
        $this->db->delete('produkhukum_tb');
    }
	
	public function lihatproduk($iduser,$role)
    {
        if($role == "admin")
        {
            $query = $this->db->get('produkhukum_tb');
            $this->db->order_by('id_produk','DESC');
            return $query;
        }
        else
        {
            $query = $this->db->get_where('produkhukum_tb',array('id_user' => $iduser));
            $this->db->order_by('id_produk','DESC');
            return $query;
        }
    }

    public function detailproduk($data)
    {
        $query =  $this->db->get_where('produkhukum_tb',array('id_produk' => $data));
		return $query;
    }
}