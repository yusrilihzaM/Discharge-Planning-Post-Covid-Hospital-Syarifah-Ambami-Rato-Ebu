<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('Role_model');
        is_logged_in();
    }

    public function index()
    {

        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
        }
        elseif($season_patient){
            $data['user'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
        }
        $data['data']=$this->Role_model->get_role();
        $data['title'] = 'Peran';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('role_access/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
}