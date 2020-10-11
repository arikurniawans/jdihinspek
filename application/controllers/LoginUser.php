<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUser extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
        $this->load->model('loginuser_model');
    }

    public function index()
    {
        $this->load->view('v_login_user');
    }

    public function register()
    {
        $this->load->view('v_register');
    }

    public function adduser()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d H:i:s');

        $data['nama_lengkap'] = $this->input->post('nama');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->hash_password($this->input->post('password'));
        $data['role'] = "user";
        $data['created_at'] = $tanggal;
        $this->loginuser_model->insertusert($data);
        redirect('loginuser');
    }

    private function hash_password($pass_user)
    {
        return password_hash($pass_user, PASSWORD_BCRYPT);
    }

}