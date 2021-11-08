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
        $id_assessment_patient=$id_patient.date('ymdHi')+1;
        // echo ' Indonesian Timezone: ' . date('d-m-Y ').$id_assessment_patient;
        $type=$this->db->query("SELECT * FROM assessment_type  ORDER BY id_assessment_type ASC")->result_array();

        $this->db->insert("assessment_patient",[
            "id_assessment_patient"=>$id_assessment_patient,
            "id_patient"=>$id_patient,
            "date_assessment_patient"=>$date_assessment_patient
        ]);
        foreach ($type as $m){
            $menuId = $m['id_assessment_type'];
            $pertanyaan=$this->db->query( "SELECT * FROM assessment_question WHERE id_assessment_type = $menuId")->result_array();
            foreach ($pertanyaan as $sm){
                $id_assessment_question=$sm['id_assessment_question'];
                $score_answer=$this->input->post($id_assessment_question);

                $this->db->insert("assessment_answer",[
                    "id_assessment_answer"=>null,
                    "id_assessment_question"=>$id_assessment_question,
                    "score_answer"=>$score_answer,
                    "id_assessment_patient"=>$id_assessment_patient
                ]);
            }
        }
        $total_score=(double)$this->db->query("SELECT SUM(score_answer)total_score FROM assessment_answer WHERE id_assessment_patient=$id_assessment_patient")->row_array() ["total_score"];

        $this->db->update('m_patient', [
            "is_active"=>1
        ], ['id_patient'=>$id_patient]);

        $this->db->update('assessment_patient', [
            "total_score"=>$total_score
        ], ['id_assessment_patient'=>$id_assessment_patient]);
        $this->hasil($total_score);
    }
    
    public function hasil($total_score)
    {
        $data['title'] = 'Hasil';
        $data["score"]=$total_score;
        if($total_score>=50){
            $data["ket"]="Segera kerumah sakit untuk pemeriksaan lebih lanjut";
        }else if($total_score<=50){
            $data["ket"]="Tetap jaga protokol kesehatan";
        }
        $this->load->view('templates/user/header', $data); 	
        $this->load->view('anonim/deteksi_mandiri/hasil', $data);
        $this->load->view('templates/user/footer', $data); 	

        $user=$this->db->get_where('m_patient', ['id_patient' => $this->session->userdata('id_patient')])->row_array();
        $data = [
            'id_patient' => $user['id_patient'],
            'role_id' => $user['role_id'] 
        ];
        $this->session->set_userdata($data);
    }
}