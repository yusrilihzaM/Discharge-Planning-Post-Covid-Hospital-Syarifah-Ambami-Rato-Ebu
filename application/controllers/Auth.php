<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    
    }
    public function index()
	{
        $data['nama'] = "Login";
        // $this->load->view('templates/auth/header.php', $data);
		$this->load->view('auth/index.php', $data);
        // $this->load->view('templates/auth/footer.php', $data);
	}
}
