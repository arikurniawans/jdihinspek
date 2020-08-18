<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukHukum extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper("file");
        $this->load->helper('path');
        $this->load->library(array('form_validation','pagination','session'));
        $iduser = $this->session->userdata('id_user');
		if($iduser != ""){
			$this->load->model('produk_model');
		}else{
			redirect('login');
		}
    }

	public function index()
    {
		$data['produk'] = $this->produk_model->lihatproduk()->result();
        $this->load->view('parts/header');
		$this->load->view('v_produk-hukum',$data);
		$this->load->view('parts/footer');
    }

    public function addprodukhukum()
    {
        $this->load->view('parts/header');
		$this->load->view('v_add-produk');
		$this->load->view('parts/footer');
    }
	
	public function editprodukhukum()
    {
        $this->load->view('parts/header');
		$this->load->view('v_detail-produk');
		$this->load->view('parts/footer');
    }

    public function uploadproduk()
    {
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
		
		$berkas = $_FILES['file_produk']['name'];
        $config['upload_path'] = './produk_hukum';
        $config['name'] = $berkas;
        $config['allowed_types'] = 'pdf';
        //$config['max_size'] = '200000';
        $this->load->library('upload', $config);
		
		$data['judul_produk'] = $this->input->post('judul');
        $data['jenis_produk'] = $this->input->post('jenis');
        $data['nomor_peraturan'] = $this->input->post('no_peraturan');
        $data['nomor_panggil'] = $this->input->post('no_panggil');
        $data['pengarang'] = $this->input->post('pengarang');
        $data['cetakan'] = $this->input->post('cetakan');
        $data['thn_pengundangan'] = $this->input->post('thn_pengundangan');
        $data['tgl_pengundangan'] = $this->input->post('tgl_perundangan');
        $data['tempat_penerbit'] = $this->input->post('tempat_penerbit');
        $data['penerbit'] = $this->input->post('penerbit');
        $data['kolasi'] = $this->input->post('kolasi');
        $data['sumber'] = $this->input->post('sumber');
        $data['subjek'] = $this->input->post('subjek');
        $data['isbn'] = $this->input->post('isbn');
        $data['status'] = $this->input->post('status');
        $data['bahasa'] = $this->input->post('bahasa');
        $data['bidang_hukum'] = $this->input->post('bidang_hukum');
        $data['no_induk_buku'] = $this->input->post('no_induk');
        $data['file_produk'] = $berkas;
        $data['lingkup'] = $this->input->post('lingkup');
        $data['wilayah'] = $this->input->post('wilayah');
        $data['id_user'] = $this->session->userdata('id_user');
        $data['created_at'] = $tanggal;
        $data['updated_at'] = $tanggal;
		
		if ( ! $this->upload->do_upload('file_produk')){
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('parts/header');
			$this->load->view('v_add-produk',$error);
			$this->load->view('parts/footer');
        }else{
			$this->produk_model->simpanproduk($data);
			$this->load->view('parts/header');
			$this->load->view('v_produk-hukum');
			$this->load->view('parts/footer');
		}
        
    }



}