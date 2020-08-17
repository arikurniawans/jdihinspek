<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukHukum extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
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
        $this->load->view('parts/header');
		$this->load->view('v_produk-hukum');
		$this->load->view('parts/footer');
    }

    public function addprodukhukum()
    {
        $this->load->view('parts/header');
		$this->load->view('v_add-produk');
		$this->load->view('parts/footer');
    }

    public function uploadproduk()
    {
        $config['upload_path']          = './produk/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
		if ( ! $this->upload->do_upload('file_produk'))
		{
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
		}else{
            echo "Berhasil";
        }
        
        
        // $data['judul_produk'] = $this->input->post('judul');
        // $data['jenis_produk'] = $this->input->post('jenis');
        // $data['nomor_peraturan'] = $this->input->post('no_peraturan');
        // $data['nomor_panggil'] = $this->input->post('no_panggil');
        // $data['pengarang'] = $this->input->post('pengarang');
        // $data['cetakan'] = $this->input->post('cetakan');
        // $data['thn_pengundangan'] = $this->input->post('thn_pengundangan');
        // $data['tgl_pengundangan'] = $this->input->post('tgl_perundangan');
        // $data['tempat_penerbit'] = $this->input->post('tempat_penerbit');
        // $data['penerbit'] = $this->input->post('penerbit');
        // $data['kolasi'] = $this->input->post('kolasi');
        // $data['sumber'] = $this->input->post('sumber');
        // $data['subjek'] = $this->input->post('subjek');
        // $data['isbn'] = $this->input->post('isbn');
        // $data['status'] = $this->input->post('status');
        // $data['bahasa'] = $this->input->post('bahasa');
        // $data['bidang_hukum'] = $this->input->post('bidang_hukum');
        // $data['no_induk_buku'] = $this->input->post('no_induk');
        // $data['file_produk'] = $this->upload->data('file_name');
        // $data['lingkup'] = $this->input->post('lingkup');
        // $data['wilayah'] = $this->input->post('wilayah');
        
        
        // if ( ! $this->upload->do_upload('file_produk'))
		// {
		// 		$error = array('error' => $this->upload->display_errors());
		// 		// $this->load->view('parts/header');
        //         // $this->load->view('v_add-produk',$error);
        //         // $this->load->view('parts/footer');
        //         print_r($error);
		// }else{
        //     $this->produk_model->simpanproduk($data);
        //     $this->load->view('parts/header');
        //     $this->load->view('v_produk-hukum');
        //     $this->load->view('parts/footer');
        // }

    }



}