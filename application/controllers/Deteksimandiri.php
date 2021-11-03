<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deteksimandiri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Deteksi Mandiri';
        $this->load->view('templates/user/header', $data); 	
        $this->load->view('anonim/deteksi_mandiri/index', $data);
        $this->load->view('templates/user/footer', $data); 	
    }

    public function hasil()
    {
        $data['title'] = 'Hasil';
        $this->load->view('templates/user/header', $data); 	
        $this->load->view('anonim/deteksi_mandiri/hasil', $data);
        $this->load->view('templates/user/footer', $data); 	
    }
}