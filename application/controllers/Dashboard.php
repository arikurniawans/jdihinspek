<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
        $iduser = $this->session->userdata('id_user');
		if($iduser != ""){
			
		}else{
			redirect('login');
		}
     
    }

    public function index()
    {
        $this->load->view('parts/header');
		$this->load->view('v_dashboard');
		$this->load->view('parts/footer');
    }

}