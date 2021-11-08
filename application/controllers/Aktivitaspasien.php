<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Aktivitaspasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('ActivityType_model');
        $this->load->model('ActivityQuestion_model');
    }

    public function index()
    {
        $data['title'] = 'Aktivitas Pasien';
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
        $this->load->view('aktivitaspasien/index', $data); 
        $this->load->view('templates/user/footer', $data); 
    }

    public function save(){
        $date_activity_patient=date('Y-m-d H:i:s');
        $id_patient=$this->session->userdata('id_patient');
        $id_activity_patient="9".$id_patient.date('ymdHi')+1;
        $type=$this->db->query("SELECT * FROM activity_type  ORDER BY id_activity_type ASC")->result_array();

        $this->db->insert("activity_patient",[
            "id_activity_patient"=>$id_activity_patient,
            "id_patient"=>$id_patient,
            "date_activity_patient"=>$date_activity_patient
        ]);

        foreach ($type as $m){
            $menuId = $m['id_activity_type'];
            $pertanyaan=$this->db->query( "SELECT * FROM activity_question WHERE id_activity_type = $menuId")->result_array();
            foreach ($pertanyaan as $sm){
                $id_activity_question=$sm['id_activity_question'];
                $answer=$this->input->post($id_activity_question);

                $this->db->insert("activity_answer",[
                    "id_activity_answer"=>null,
                    "id_activity_question"=>$id_activity_question,
                    "answer"=>$answer,
                    "id_activity_patient"=>$id_activity_patient
                ]);
            }
        }
        $this->session->set_flashdata('flash', 'Di simpan');
		$this->session->set_flashdata('data', 'Aktifitas');
        redirect('pasien');
    }
}