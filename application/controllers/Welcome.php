<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Landing Page';
        $this->load->view('templates/landing_page/header', $data); 
		$this->load->view('templates/landing_page/navbar', $data); 	
        $this->load->view('anonim/landing_page/index', $data); 
	}
}
