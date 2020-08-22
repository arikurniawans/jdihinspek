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
			$this->load->model('dashboard_model');
		}else{
			redirect('login');
		}
     
    }

    public function index()
    {
        $role = $this->session->userdata('role');
        $iduser = $this->session->userdata('id_user');

        $data['users'] = $this->dashboard_model->jumlahuser()->row();
        $data['perda'] = $this->dashboard_model->jumlahperda($iduser,$role)->row();
        $data['pergub'] = $this->dashboard_model->jumlahpergub($iduser,$role)->row();
        $data['kepgub'] = $this->dashboard_model->jumlahkepgub($iduser,$role)->row();
        $data['insgub'] = $this->dashboard_model->jumlahinsgub($iduser,$role)->row();
        $data['skgub'] = $this->dashboard_model->jumlahskgub($iduser,$role)->row();
        $data['mou'] = $this->dashboard_model->jumlahmou($iduser,$role)->row();

        $this->load->view('parts/header');
		$this->load->view('v_dashboard',$data);
		$this->load->view('parts/footer');
    }

}