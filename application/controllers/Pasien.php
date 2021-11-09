<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    
    }
    public function index()
	{
        $data['title'] = 'Beranda Pasien';
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
        $data['time_limit']='20';
        $data['jadwal_kontrol_terbaru']=$this->db->query("SELECT * FROM control_patient NATURAL JOIN m_patient WHERE id_patient=$season_patient ORDER BY id_control_patient DESC LIMIT 1")->row_array();
        $data['resep_dokter']=$this->db->query("SELECT * FROM prescription_patient NATURAL JOIN m_user WHERE id_patient=$season_patient ORDER BY id_prescription_patient DESC LIMIT 1")->row_array();
        
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
      
        $this->load->view('pasien/index', $data); 
        $this->load->view('pasien/disclaimer', $data); 
        $this->load->view('templates/user/footer', $data); 	
	}
}