<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
        $this->load->model('main_model');
    }

    public function index()
    {
        $data['allproduct'] = $this->main_model->allproduct()->result();
        $data['totalproduct'] = $this->main_model->totalproduct();
        $data['totalaktif'] = $this->main_model->totalproductactive();
        $this->load->view('v_main',$data);
    }

    public function perda()
    {
        $data['perdaproduct'] = $this->main_model->perdaproduct()->result();
        $data['totalproduct'] = $this->main_model->totalperdaproduct();
        $data['totalaktif'] = $this->main_model->totalperdaproductactive();
        $this->load->view('v_main_perda',$data);
    }

    public function pergub()
    {
        $data['pergubproduct'] = $this->main_model->pergubproduct()->result();
        $data['totalproduct'] = $this->main_model->totalpergubproduct();
        $data['totalaktif'] = $this->main_model->totalpergubroductactive();
        $this->load->view('v_main_pergub',$data);
    }

    public function kepgub()
    {
        $data['kepgubproduct'] = $this->main_model->kepgubproduct()->result();
        $data['totalproduct'] = $this->main_model->totalkepgubproduct();
        $data['totalaktif'] = $this->main_model->totalkepgubroductactive();
        $this->load->view('v_main_kepgub',$data);
    }

    public function insgub()
    {
        $data['insgubproduct'] = $this->main_model->insgubproduct()->result();
        $data['totalproduct'] = $this->main_model->totalinsgubproduct();
        $data['totalaktif'] = $this->main_model->totalinsgubroductactive();
        $this->load->view('v_main_insgub',$data);
    }

    public function skgub()
    {
        $data['skgubproduct'] = $this->main_model->skgubproduct()->result();
        $data['totalproduct'] = $this->main_model->totalskgubproduct();
        $data['totalaktif'] = $this->main_model->totalskgubroductactive();
        $this->load->view('v_main_skgub',$data);
    }

    public function mou()
    {
        $data['mouproduct'] = $this->main_model->mouproduct()->result();
        $data['totalproduct'] = $this->main_model->totalmouproduct();
        $data['totalaktif'] = $this->main_model->totalmouroductactive();
        $this->load->view('v_main_mou',$data);
    }

    public function detail($id)
    {
        $data['detailproduk'] = $this->main_model->detailproduk($id)->result();
        $this->load->view('v_main_detail',$data);
    }

    public function downloadproduct($id)
    {
        $data['detailproduk'] = $this->main_model->detailproduk($id)->row();
        //header("Cache-Control: public");
        //header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=".basename($data['detailproduk']->file_produk));
        header("Content-Type: application/octet-stream;");
        //header("Content-Transfer-Encoding: binary");
        readfile(base_url()."produk_hukum/".$data['detailproduk']->file_produk);
    }

}