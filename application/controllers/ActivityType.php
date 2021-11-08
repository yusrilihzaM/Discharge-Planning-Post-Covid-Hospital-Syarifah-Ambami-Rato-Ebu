<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityType extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('ActivityType_model');
    
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
        $data['data'] = $this->db->get('activity_type')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Tipe Aktifitas';

       
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('activitytype/index', $data); 
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
        $data['menu'] = $this->db->get('activity_type')->result_array();

        $this->form_validation->set_rules('activity_type', 'activity_type', 'required');
        $data['title'] = 'Tambah Tipe Aktifitas';

        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('activitytype/add_menu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $activity_type=$this->input->post('activity_type');
        $this->db->insert('activity_type', ['activity_type' =>$activity_type]);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('data', 'Tipe Aktifitas');
    
        redirect('ActivityType');
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

        $this->form_validation->set_rules('activity_type', 'activity_type', 'required');
        $data['title'] = 'Edit Menu';
        $data['data']=$this->db->get_where('activity_type', ['id_activity_type' => $id])->row_array();
      
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('activitytype/update_menu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $id_activity_type=$this->input->post('id_activity_type',true);
        $activity_type=$this->input->post('activity_type',true);
    
        $this->db->set('activity_type',$activity_type);    
        $this->db->where('id_activity_type',$id_activity_type);
        $this->db->update('activity_type');
        $this->session->set_flashdata('flash', 'Di Perbarui');
        $this->session->set_flashdata('data', 'Tipe Aktifitas');
        redirect('ActivityType');
    }

    }


    public function hapus($id_activity_type)
	{
        $this->db->where('id_activity_type', $id_activity_type);
        $this->db->delete('activity_type');
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Tipe Aktifitas');
        $url="ActivityType";
		redirect($url);
	}
}