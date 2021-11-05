<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

    public function hasil()
    {
        $data['title'] = 'Hasil';
        $this->load->view('templates/user/header', $data); 	
        $this->load->view('anonim/deteksi_mandiri/hasil', $data);
        $this->load->view('templates/user/footer', $data); 	
    }
}