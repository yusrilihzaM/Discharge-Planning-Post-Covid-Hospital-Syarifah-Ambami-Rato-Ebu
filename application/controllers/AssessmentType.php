<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssessmentType extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('AssessmentType_model');
    
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
        $data['data'] = $this->db->get('assessment_type')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Tipe Pertanyaan';

       
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('assessmentype/index', $data); 
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
        $data['menu'] = $this->db->get('assessment_type')->result_array();

        $this->form_validation->set_rules('assessment_type', 'assessment_type', 'required');
        $data['title'] = 'Tambah Tipe Pertanyaan';

        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('assessmentype/add_menu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $assessment_type=$this->input->post('assessment_type');
        $this->db->insert('assessment_type', ['assessment_type' =>$assessment_type]);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('data', 'Tipe Pertanyaan');
    
        redirect('AssessmentType');
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
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('assessment_type', 'assessment_type', 'required');
        $data['title'] = 'Edit Menu';
        $data['data']=$this->db->get_where('assessment_type', ['id_assessment_type' => $id])->row_array();
      
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('assessmentype/update_menu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $id_assessment_type=$this->input->post('id_assessment_type',true);
        $assessment_type=$this->input->post('assessment_type',true);
    
        $this->db->set('assessment_type',$assessment_type);    
        $this->db->where('id_assessment_type',$id_assessment_type);
        $this->db->update('assessment_type');
        $this->session->set_flashdata('flash', 'Di Perbarui');
        $this->session->set_flashdata('data', 'Tipe Pertanyaan');
        redirect('AssessmentType');
    }

    }


    public function hapus($id_assessment_type)
	{
        $this->db->where('id_assessment_type', $id_assessment_type);
        $this->db->delete('assessment_type');
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Tipe Pertanyaan');
        $url="AssessmentType";
		redirect($url);
	}
}