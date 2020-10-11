<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forbiden extends CI_Controller {

    public function index()
    {
            $CI =& get_instance();
            $CI->load->view('v_forbiden');
            echo $CI->output->get_output();
            exit;
    }

}