<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Submenu_model');
        $this->load->model('Menu_model');
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
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Manajemen Sub Menu';
        $data['data'] = $this->Submenu_model->get_user_sub_menu();
     
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('submenu/index', $data); 
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
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('id_user_menu', 'id_user_menu', 'trim');
        $this->form_validation->set_rules('title', 'title', 'trim');
        $this->form_validation->set_rules('url', 'url', 'trim');
        $this->form_validation->set_rules('icon', 'icon', 'trim');
        $this->form_validation->set_rules('is_active', 'is_active', 'trim');
        $data['title'] = 'Tambah Sub Menu';

        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('submenu/add_submenu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $title=$this->input->post('title',true);
        $id_user_menu=$this->input->post('id_user_menu',true);
        $url=$this->input->post('url',true);
        $icon=$this->input->post('icon',true);
        $on=$this->input->post('is_active',true);
       
        if($on=="on"){
            $is_active=1;
        }else{
            $is_active=0;
        }
        $data_input=array(
            'id_user_sub_menu'=>NULL,
            'title'=>$title,
            'id_user_menu'=>$id_user_menu,
            'url'=>$url,
            'icon'=>$icon,
            'is_active'=>$is_active
        );
            
           
        // echo("$on<br>");
        $this->Submenu_model->add_user_sub_menu($data_input);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('data', 'Sub Menu');
    
        redirect('submenu');
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

        $this->form_validation->set_rules('id_user_menu', 'id_user_menu', 'trim');
        $this->form_validation->set_rules('title', 'title', 'trim');
        $this->form_validation->set_rules('url', 'url', 'trim');
        $this->form_validation->set_rules('icon', 'icon', 'trim');
        $this->form_validation->set_rules('is_active', 'is_active', 'trim');
        $data['title'] = 'Edit Menu';
        
      
       
        $data['data_submenu']=$this->Submenu_model->get_user_sub_menu_byID($id);
        $data['data_menu']=$this->Menu_model->get_user_menu_byID($data['data_submenu']['id_user_menu']);
        
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('submenu/edit_submenu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $id_user_sub_menu=$this->input->post('id_user_sub_menu',true);
        $title=$this->input->post('title',true);
        $id_user_menu=$this->input->post('id_user_menu',true);
        $url=$this->input->post('url',true);
        $icon=$this->input->post('icon',true);
        $on=$this->input->post('is_active',true);
       
        if($on=="on"){
            $is_active=1;
        }else{
            $is_active=0;
        }
        $data_input=array(
            'title'=>$title,
            'id_user_menu'=>$id_user_menu,
            'url'=>$url,
            'icon'=>$icon,
            'is_active'=>$is_active
        );
        $done=$this->Submenu_model->update_user_sub_menu($id_user_sub_menu,$data_input);
        $this->session->set_flashdata('flash', 'Di perbarui');
		$this->session->set_flashdata('data', 'Sub Menu');
    
        redirect('submenu');
    }

    }


    public function hapus($id_user_menu)
	{
        $this->Submenu_model->delete_user_sub_menu($id_user_menu);
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Menu');
        $url="Menu";
		redirect($url);
	}
}