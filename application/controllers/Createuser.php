<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createuser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('m_user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $data['title'] = 'Beranda Admin';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('admin/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
}