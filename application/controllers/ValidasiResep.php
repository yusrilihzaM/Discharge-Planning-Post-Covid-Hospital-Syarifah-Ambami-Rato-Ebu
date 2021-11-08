<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidasiResep extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Validasi Resep';
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
        $data['data']=$this->db->query("SELECT * FROM prescription_patient NATURAL JOIN m_user")->result_array();
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('validasiresep/index', $data); 
        $this->load->view('templates/user/footer', $data); 
    }

    public function acc($id_prescription_patient){
        $this->db->update("prescription_patient", [
            "status"=>"Tervalidasi"
        ],["id_prescription_patient"=>$id_prescription_patient]);
        $this->session->set_flashdata('flash', 'Tervalidasi');
		$this->session->set_flashdata('data', 'Resep');
    
        redirect('ValidasiResep');
    }
    public function reject($id_prescription_patient){
        $this->db->update("prescription_patient", [
            "status"=>"Tolak Resep"
        ],["id_prescription_patient"=>$id_prescription_patient]);
        $this->session->set_flashdata('flash', 'Tolak Resep');
		$this->session->set_flashdata('data', 'Resep');
    
        redirect('ValidasiResep');
    }
}