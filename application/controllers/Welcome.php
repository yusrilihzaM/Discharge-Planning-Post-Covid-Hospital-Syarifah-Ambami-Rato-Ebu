<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    
    }
	public function index()
	{
		$data['title'] = 'Landing Page';
		$this->form_validation->set_rules('nik', 'nik', 'trim|required');
		if ($this->form_validation->run() == false) {
        $this->load->view('templates/landing_page/header', $data); 
		$this->load->view('templates/landing_page/navbar', $data); 	
        $this->load->view('anonim/landing_page/index', $data); 
		}
		else{
			$nik=$this->input->post('nik');
			$user=$this->db->get_where('m_patient', ['nik_patient' => $nik])->row_array();
			// var_dump($user);
			// die;
			if ($user) {
				$data = [
					'id_patient' => $user['id_patient']
				];
				$this->session->set_userdata($data);
				redirect('Deteksimandiri');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK tidak terdaftar</div>');
				redirect('welcome');
			}
		}
	}
}