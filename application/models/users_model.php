<?php

class users_model extends CI_Model
{
    var $user_tb = "user_tb";

    public function logged_in()
    {
        return $this->session->userdata('id_user');
    }

    public function simpanusers($data)
    {
        $this->db->insert('user_tb',$data);
    }

    public function ubahusers($id,$data)
    {
        $this->db->where('id_user',$id);
        $this->db->update('user_tb',$data);
    }

    public function ubahprofil($id,$data)
    {
        $this->db->set('password',$data);
        $this->db->where('id_user',$id);
        $this->db->update('user_tb');
    }

    public function hapususers($id)
    {
        $this->db->where('id_user',$id);
        $this->db->delete('user_tb');
    }

    public function lihatusers()
    {
        $this->db->select('*');
        $this->db->from('user_tb');
        $this->db->where('role','staff');
        $this->db->order_by('id_user');
        $query = $this->db->get();
		return $query;
    }

    public function detailusers($id)
    {
        $query =  $this->db->get_where('user_tb',array('id_user' => $id));
		return $query;
    }

}