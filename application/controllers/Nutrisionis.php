<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nutrisionis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    
    }
    public function index()
	{
        $data['title'] = 'Beranda Nutrisionis';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 
        $this->load->view('nutrisionis/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
	}
}