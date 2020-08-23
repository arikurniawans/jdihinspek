<?php

class main_model extends CI_Model
{
    var $user_tb = "user_tb";

    public function logged_in()
    {
        return $this->session->userdata('id_user');
    }

    public function totalproduct()
    {
        $query = $this->db->count_all_results('produkhukum_tb');
        return $query;
    }

    public function totalproductactive()
    {
        $query = $this->db->where('status','masih berlaku')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function allproduct()
    {
        $query = $this->db->get('produkhukum_tb');
        $this->db->order_by('id_produk','DESC');
        return $query;
    }

    public function perdaproduct()
    {
        $query = $this->db->get_where('produkhukum_tb',array('jenis_produk' => '1'));
        $this->db->order_by('id_produk','DESC');
        return $query;
    }

    public function totalperdaproduct()
    {
        $query = $this->db->where('jenis_produk','1')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function totalperdaproductactive()
    {
        $query = $this->db->where('jenis_produk','1')->where('status','masih berlaku')->count_all_results('produkhukum_tb');
        return $query;
    }

 
    public function pergubproduct()
    {
        $query = $this->db->get_where('produkhukum_tb',array('jenis_produk' => '2'));
        $this->db->order_by('id_produk','DESC');
        return $query;
    }

    public function totalpergubproduct()
    {
        $query = $this->db->where('jenis_produk','2')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function totalpergubroductactive()
    {
        $query = $this->db->where('jenis_produk','2')->where('status','masih berlaku')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function kepgubproduct()
    {
        $query = $this->db->get_where('produkhukum_tb',array('jenis_produk' => '3'));
        $this->db->order_by('id_produk','DESC');
        return $query;
    }

    public function totalkepgubproduct()
    {
        $query = $this->db->where('jenis_produk','3')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function totalkepgubroductactive()
    {
        $query = $this->db->where('jenis_produk','3')->where('status','masih berlaku')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function insgubproduct()
    {
        $query = $this->db->get_where('produkhukum_tb',array('jenis_produk' => '4'));
        $this->db->order_by('id_produk','DESC');
        return $query;
    }

    public function totalinsgubproduct()
    {
        $query = $this->db->where('jenis_produk','4')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function totalinsgubroductactive()
    {
        $query = $this->db->where('jenis_produk','4')->where('status','masih berlaku')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function skgubproduct()
    {
        $query = $this->db->get_where('produkhukum_tb',array('jenis_produk' => '5'));
        $this->db->order_by('id_produk','DESC');
        return $query;
    }

    public function totalskgubproduct()
    {
        $query = $this->db->where('jenis_produk','5')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function totalskgubroductactive()
    {
        $query = $this->db->where('jenis_produk','5')->where('status','masih berlaku')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function mouproduct()
    {
        $query = $this->db->get_where('produkhukum_tb',array('jenis_produk' => '6'));
        $this->db->order_by('id_produk','DESC');
        return $query;
    }

    public function totalmouproduct()
    {
        $query = $this->db->where('jenis_produk','6')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function totalmouroductactive()
    {
        $query = $this->db->where('jenis_produk','6')->where('status','masih berlaku')->count_all_results('produkhukum_tb');
        return $query;
    }

    public function detailproduk($data)
    {
        $query =  $this->db->get_where('produkhukum_tb',array('id_produk' => $data));
		return $query;
    }

}