<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewPatient extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Pasien_model');
        $this->load->model('AssessmentType_model');
        $this->load->model('AssessmentQuestion_model');
        $this->load->model('ActivityType_model');
        $this->load->model('ActivityQuestion_model');
    }

    public function index()
    {
        ini_set('memory_limit', '-1');
        $data['title'] = 'Lihat Pasien';
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
          
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
         
        }
        // var_dump($data['user']);
        // die;

        $data['data'] = $this->Pasien_model->get_pasien();
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function detailpatient($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
           
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
        
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/detailpatient', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function resultdetection($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $data['deteksi'] = $this->db->get('assessment_question')->result_array();
        $data['answer'] = $this->AssessmentQuestion_model->get_assessment_answer($id);
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/resultdetection', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function activitypatient($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $id_patient=$data['data']['id_patient'];
        $data['activity_patient'] = $this->db->query("Select * from activity_patient where id_patient=$id_patient order by id_activity_patient")->result_array();
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/activitypatient', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }

    public function detailactivity($id_activity_patient){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
       
        
        $data['activity_question'] = $this->db->query("Select * from activity_question natural join activity_type order by id_activity_question")->result_array();
        $data['activity_answer'] = $this->db->query("Select * from activity_patient natural join activity_answer where id_activity_patient=$id_activity_patient order by id_activity_patient")->result_array();
        $id_patient=$data['activity_answer'][0]['id_patient'];
        // var_dump($data['activity_answer']);
        // die;
        $data['data']=$this->Pasien_model->get_pasien_byID($id_patient);
        $data['id_activity_patient']=$id_activity_patient;
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/detailactivity', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function medicine(){

    }

    public function historyprescription(){

    }
}