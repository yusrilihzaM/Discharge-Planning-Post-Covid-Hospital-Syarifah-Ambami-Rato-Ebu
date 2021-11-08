<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Obatpasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('DrugPatient_model');
    }

    public function index()
    {
        $data['title'] = 'Obat Pasien';
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

        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('obatpasien/index', $data); 
        $this->load->view('templates/user/footer', $data); 
    }

    public function save(){
        $obat_pagi=$this->input->post('obat_pagi',true);
        $obat_siang=$this->input->post('obat_siang',true);
        $obat_malam=$this->input->post('obat_malam',true);
        $season_patient=$this->session->userdata('id_patient');
        $date_drugs_patient=date('Y-m-d H:i:s');
        $data_pagi=array(
            "id_patient"=>$season_patient,
            "drug"=>$obat_pagi,
            "id_patient"=>$season_patient,
            "type"=>"Obat Pagi",
            "date_drugs_patient"=>$date_drugs_patient
        );
        $data_siang=array(
            "id_patient"=>$season_patient,
            "drug"=>$obat_siang,
            "id_patient"=>$season_patient,
            "type"=>"Obat Siang",
            "date_drugs_patient"=>$date_drugs_patient
        );
        $data_malam=array(
            "id_patient"=>$season_patient,
            "drug"=>$obat_malam,
            "id_patient"=>$season_patient,
            "type"=>"Obat Malam",
            "date_drugs_patient"=>$date_drugs_patient
        );
        $this->DrugPatient_model->add_drugs_patient($data_pagi);
        $this->DrugPatient_model->add_drugs_patient($data_siang);
        $this->DrugPatient_model->add_drugs_patient($data_malam);

        $this->session->set_flashdata('flash', 'Di Simpan');
		$this->session->set_flashdata('data', 'Obat Anda');
    
        redirect('pasien');
    }
}