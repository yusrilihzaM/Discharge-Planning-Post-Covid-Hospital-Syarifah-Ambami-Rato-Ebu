<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssessmentQuestion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('AssessmentType_model');
        $this->load->model('AssessmentQuestion_model');
    
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
        $data['data'] = $this->db->get('assessment_question')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Pertanyaan Deteksi';

       
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('assessmentquestion/index', $data); 
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
        $data['menu'] = $this->db->get('assessment_question')->result_array();
        $data['tipe_pertanyaan'] = $this->AssessmentType_model->get_assessment_type();
        $this->form_validation->set_rules('assessment_question', 'assessment_question', 'required');
        $this->form_validation->set_rules('id_assessment_type', 'id_assessment_type', 'required');
        $this->form_validation->set_rules('weight_yes', 'weight_yes', 'required');
        $this->form_validation->set_rules('weight_no', 'weight_no', 'required');
        $data['title'] = 'Tambah Pertanyaan Deteksi';

        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('assessmentquestion/add_question', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $assessment_question=$this->input->post('assessment_question');
        $id_assessment_type=$this->input->post('id_assessment_type');
        $weight_yes=$this->input->post('weight_yes');
        $weight_no=$this->input->post('weight_no');
        $data_input=array(
            'id_assessment_question'=>NULL,
            'id_assessment_type'=>$id_assessment_type,
            'assessment_question'=>$assessment_question,
            'weight_yes'=>$weight_yes,
            'weight_no'=>$weight_no
        );
        $this->AssessmentQuestion_model->add_assessment_question($data_input);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('data', 'Pertanyaan Deteksi');
    
        redirect('Assessmentquestion');
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
        $data['menu'] = $this->db->get('assessment_question')->result_array();
        $data['tipe_pertanyaan'] = $this->AssessmentType_model->get_assessment_type();
        $this->form_validation->set_rules('assessment_question', 'assessment_question', 'required');
        $this->form_validation->set_rules('id_assessment_type', 'id_assessment_type', 'required');
        $this->form_validation->set_rules('weight_yes', 'weight_yes', 'required');
        $this->form_validation->set_rules('weight_no', 'weight_no', 'required');
        $data['title'] = 'Edit Pertanyaan Deteksi';
        $data['data']=$this->AssessmentQuestion_model->get_assessment_question_byID($id);
        
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('assessmentquestion/update_question', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $id_assessment_question=$this->input->post('id_assessment_question');
        $assessment_question=$this->input->post('assessment_question');
        $id_assessment_type=$this->input->post('id_assessment_type');
        $weight_yes=$this->input->post('weight_yes');
        $weight_no=$this->input->post('weight_no');
        $data_input=array(
            'id_assessment_question'=>NULL,
            'id_assessment_type'=>$id_assessment_type,
            'assessment_question'=>$assessment_question,
            'weight_yes'=>$weight_yes,
            'weight_no'=>$weight_no
        );
        $this->AssessmentQuestion_model->update_assessment_question($id_assessment_question,$data_input);
        $this->session->set_flashdata('flash', 'Di perbarui');
		$this->session->set_flashdata('data', 'Pertanyaan Deteksi');
    
        redirect('Assessmentquestion');
    }

    }


    public function hapus($id_assessment_question)
	{
        $this->db->where('id_assessment_question', $id_assessment_question);
        $this->db->delete('assessment_question');
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Pertanyaan Deteksi');
        $url="Assessmentquestion";
		redirect($url);
	}
}