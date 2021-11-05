<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Deteksimandiri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('AssessmentType_model');
        $this->load->model('AssessmentQuestion_model');
    }

    public function index()
    {
        $data['title'] = 'Deteksi Mandiri';
        $data['soal']=$this->AssessmentQuestion_model->get_assessment_all();
       
        $this->load->view('templates/user/header', $data); 	
        $this->load->view('anonim/deteksi_mandiri/index', $data);
        $this->load->view('templates/user/footer', $data); 	
    }

    public function hitung(){
        $date_assessment_patient=date('Y-m-d H:i:s');
        $id_patient=$this->session->userdata('id_patient');
        $id_assessment_patient=$id_patient.date('ymdHi');
        // echo ' Indonesian Timezone: ' . date('d-m-Y ').$id_assessment_patient;
        $type=$this->db->query("SELECT * FROM assessment_type  ORDER BY id_assessment_type ASC")->result_array();
        foreach ($type as $m){
            $menuId = $m['id_assessment_type'];
            $pertanyaan=$this->db->query( "SELECT * FROM assessment_question WHERE id_assessment_type = $menuId")->result_array();
        }
    }
    public function hasil()
    {
        $data['title'] = 'Hasil';
        $this->load->view('templates/user/header', $data); 	
        $this->load->view('anonim/deteksi_mandiri/hasil', $data);
        $this->load->view('templates/user/footer', $data); 	
    }
}