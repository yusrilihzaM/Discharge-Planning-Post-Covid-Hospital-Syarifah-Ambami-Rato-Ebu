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
        $data['title'] = 'Beranda Pasien';
        $data['user'] = $this->db->get_where('m_patient', ['id_patient' => $this->session->userdata('id_patient')])->row_array();
        $this->load->view('templates/pasien/header', $data); 
		$this->load->view('templates/pasien/navbar', $data); 	
        $this->load->view('templates/pasien/left_menu', $data); 	
        $this->load->view('pasien/disclaimer', $data); 
        $this->load->view('pasien/index', $data); 
        $this->load->view('templates/pasien/footer', $data); 	
	}
}