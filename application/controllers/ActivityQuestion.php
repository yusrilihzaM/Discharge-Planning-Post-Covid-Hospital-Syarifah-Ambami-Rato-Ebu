<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityQuestion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('ActivityType_model');
        $this->load->model('ActivityQuestion_model');
    
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
        $data['data'] = $this->db->query("Select * from activity_question natural join activity_type")->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Pertanyaan Aktifitas';

       
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('activityquestion/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    
    }
    public function add()
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
        $data['menu'] = $this->db->get('activity_question')->result_array();
        $data['tipe_pertanyaan'] = $this->ActivityType_model->get_activity_type();
       
        $this->form_validation->set_rules('activity_question', 'activity_question', 'required');
        $this->form_validation->set_rules('id_activity_type', 'id_activity_type', 'required');
        $data['title'] = 'Tambah Pertanyaan Aktifitas';

        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('activityquestion/add_question', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $activity_question=$this->input->post('activity_question');
        $id_activity_type=$this->input->post('id_activity_type');
        $data_input=array(
            'id_activity_question'=>NULL,
            'id_activity_type'=>$id_activity_type,
            'activity_question'=>$activity_question
            
        );
        $this->ActivityQuestion_model->add_activity_question($data_input);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('data', 'Pertanyaan Aktifitas');
    
        redirect('activityquestion');
    }

    }

    public function edit($id)
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
        $data['menu'] = $this->db->get('activity_question')->result_array();
        $data['tipe_pertanyaan'] = $this->ActivityType_model->get_activity_type();
        $this->form_validation->set_rules('activity_question', 'activity_question', 'required');
        $this->form_validation->set_rules('id_activity_type', 'id_activity_type', 'required');
      
        $data['title'] = 'Edit Pertanyaan Aktifitas';
        $data['data']=$this->ActivityQuestion_model->get_activity_question_byID($id);
        
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('activityquestion/update_question', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $id_activity_question=$this->input->post('id_activity_question');
        $activity_question=$this->input->post('activity_question');
        $id_activity_type=$this->input->post('id_activity_type');
       
        $data_input=array(
           
            'id_activity_type'=>$id_activity_type,
            'activity_question'=>$activity_question
           
        );
        $this->ActivityQuestion_model->update_activity_question($id_activity_question,$data_input);
        $this->session->set_flashdata('flash', 'Diperbarui');
		$this->session->set_flashdata('data', 'Pertanyaan Aktifitas');
    
        redirect('activityquestion');
    }

    }


    public function hapus($id_activity_question)
	{
        $this->db->where('id_activity_question', $id_activity_question);
        $this->db->delete('activity_question');
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Pertanyaan Aktifitas');
        $url="activityquestion";
		redirect($url);
	}
}