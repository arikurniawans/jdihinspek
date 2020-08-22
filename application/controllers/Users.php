<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','pagination','session'));
        $iduser = $this->session->userdata('id_user');
		if($iduser != ""){
			$this->load->model('users_model');
		}else{
			redirect('login');
		}
    }

    public function index()
    {
        $data['userdata'] = $this->users_model->lihatusers()->result();
        $this->load->view('parts/header');
		$this->load->view('v_user',$data);
		$this->load->view('parts/footer');
    }

    public function addusers()
    {
        $this->load->view('parts/header');
		$this->load->view('v_add-user');
		$this->load->view('parts/footer');
    }

    public function editusers($id)
    {
        $data['userdata'] = $this->users_model->detailusers($id)->result();
        $this->load->view('parts/header');
		$this->load->view('v_edit-user',$data);
		$this->load->view('parts/footer');
    }

    public function detailusers($id)
    {
        $data['userdata'] = $this->users_model->detailusers($id)->result();
        $this->load->view('parts/header');
		$this->load->view('v_detail-user',$data);
		$this->load->view('parts/footer');
    }

    public function deleteusers($id)
    {
        $this->users_model->hapususers($id);
        redirect('users');
    }

    public function updateusers()
    {
        $id = $this->input->post('idusers');
        $pass = $this->input->post('password');

        if($pass == "")
        {
            $data['nama_lengkap'] = $this->input->post('nama');
            $data['username'] = $this->input->post('username');
            $this->users_model->ubahusers($id,$data);
            redirect('users');
        }
        else
        {
            $data['nama_lengkap'] = $this->input->post('nama');
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->hash_password($this->input->post('password'));
            $this->users_model->ubahusers($id,$data);
            redirect('users');
        }

    }

    public function insertusers()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d H:i:s');

        $data['nama_lengkap'] = $this->input->post('nama');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->hash_password($this->input->post('password'));
        $data['created_at'] = $tanggal;

        $this->users_model->simpanusers($data);
        redirect('users');
    }

    public function profilusers()
    {
        $data['userdata'] = $this->users_model->detailusers($this->session->userdata('id_user'))->result();
        $this->load->view('parts/header');
		$this->load->view('v_profil-users',$data);
		$this->load->view('parts/footer');
    }

    public function updateprofil()
    {
        $id = $this->input->post('idusers');
        $password = $this->hash_password($this->input->post('password'));
        $this->users_model->ubahprofil($id,$password);
        $this->session->set_flashdata("success","ok");
        redirect('users/profilusers');
    }

    private function hash_password($pass_user)
    {
        return password_hash($pass_user, PASSWORD_BCRYPT);
    }

}