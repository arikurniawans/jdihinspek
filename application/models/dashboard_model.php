<?php

class dashboard_model extends CI_Model
{
    var $user_tb = "user_tb";

    public function logged_in()
    {
        return $this->session->userdata('id_user');
    }

    public function jumlahuser()
    {
        $this->db->select('COUNT(*) AS users');
        $this->db->from('user_tb');
        $this->db->where('role','staff');
        $query = $this->db->get();
		return $query;
    }

    public function jumlahperda($iduser,$role)
    {
        if($role == "admin")
        {
            $this->db->select('COUNT(*) AS perda');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','1');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            $this->db->select('COUNT(*) AS perda');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','1');
            $this->db->where('id_user',$iduser);
            $query = $this->db->get();
            return $query;
        }
        
    }

    public function jumlahpergub($iduser,$role)
    {
        if($role == "admin")
        {
            $this->db->select('COUNT(*) AS pergub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','2');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            $this->db->select('COUNT(*) AS pergub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','2');
            $this->db->where('id_user',$iduser);
            $query = $this->db->get();
            return $query;
        }
    }

    public function jumlahkepgub($iduser,$role)
    {
        if($role == "admin")
        {
            $this->db->select('COUNT(*) AS kepgub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','3');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            $this->db->select('COUNT(*) AS kepgub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','3');
            $this->db->where('id_user',$iduser);
            $query = $this->db->get();
            return $query;
        }
    }

    public function jumlahinsgub($iduser,$role)
    {
        if($role == "admin")
        {
            $this->db->select('COUNT(*) AS insgub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','4');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            $this->db->select('COUNT(*) AS insgub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','4');
            $this->db->where('id_user',$iduser);
            $query = $this->db->get();
            return $query;
        }
    }

    public function jumlahskgub($iduser,$role)
    {
        if($role == "admin")
        {
            $this->db->select('COUNT(*) AS skgub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','5');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            $this->db->select('COUNT(*) AS skgub');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','5');
            $this->db->where('id_user',$iduser);
            $query = $this->db->get();
            return $query;
        }
    }

    public function jumlahmou($iduser,$role)
    {
        if($role == "admin")
        {
            $this->db->select('COUNT(*) AS mou');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','6');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            $this->db->select('COUNT(*) AS mou');
            $this->db->from('produkhukum_tb');
            $this->db->where('jenis_produk','6');
            $this->db->where('id_user',$iduser);
            $query = $this->db->get();
            return $query;
        }
    }

}