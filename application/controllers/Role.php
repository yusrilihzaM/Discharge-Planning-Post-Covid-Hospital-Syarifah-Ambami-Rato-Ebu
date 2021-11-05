<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('Role_model');
        is_logged_in();
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
        $data['data']=$this->Role_model->get_role();
        $data['title'] = 'Manajemen Peran';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('role_access/index', $data); 
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
        $this->load->view('role_access/add_role', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $role=$this->input->post('role',true);

        $data_input=array(
            'role_id'=>NULL,
            'role'=>$role
        );
            
        // echo("$on<br>");
        $this->Role_model->add_role($data_input);
        $this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('data', 'Peran baru');
    
        redirect('role');
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
        $data['title'] = 'Edit  Role';
        $data['data_role']=$this->Role_model->get_role_byID($id);
     
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('role_access/edit_role', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $role=$this->input->post('role',true);
        $role_id=$this->input->post('role_id',true);
        $data_input=array(
            'role'=>$role
        );
            
        $this->Role_model->update_role($data_input, $role_id);
        $this->session->set_flashdata('flash', 'Di perbarui');
		$this->session->set_flashdata('data', 'Peran');
    
        redirect('role');
    }
    }

    public function hapus($role_id)
	{
        $this->Role_model->delete_role($role_id);
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Peran');
        $url="role";
		redirect($url);
	}



    public function hak_akses($role_id)
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
        $data['data']=$this->Role_model->get_role();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['role'] = $this->db->get_where('role', ['role_id' => $role_id])->row_array();
        $data['title'] = 'Manajemen Hak Akses';
        // var_dump($data['role']);
        // die;
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('role_access/hak', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'id_role' => $role_id,
            'id_user_menu' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if($result->num_rows() < 1)  {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
        $this->session->set_flashdata('flash', 'Di perbarui');
		$this->session->set_flashdata('data', 'Hak Akses');
    }
}