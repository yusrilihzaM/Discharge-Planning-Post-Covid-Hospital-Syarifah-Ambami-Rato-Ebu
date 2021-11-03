<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    
    }
    public function index()
	{
        $data['title'] = 'Beranda';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('pasien/disclaimer', $data); 
        $this->load->view('pasien/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
	}
}