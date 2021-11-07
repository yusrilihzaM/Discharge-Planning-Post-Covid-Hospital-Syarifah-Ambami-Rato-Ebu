<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Manajemenpegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('User_model');
        $this->load->model('Role_model');
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
        
        $data['title'] = 'Manajemen Pegawai';
      
        $data['data'] = $this->User_model->get_user();
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('manajemenpegawai/index', $data); 
        $this->load->view('templates/user/footer', $data);

    }

    public function tambahdatapegawai()
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
        $data['role']=$this->Role_model->get_role();

        $this->form_validation->set_rules('role_id', 'role_id', 'trim');
        $this->form_validation->set_rules('name', 'name', 'trim');
        $this->form_validation->set_rules('username', 'username', 'trim');
        $this->form_validation->set_rules('password', 'password', 'trim');
        
        $this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'trim');
        $this->form_validation->set_rules('age', 'age', 'trim');
        $this->form_validation->set_rules('gender', 'gender', 'trim');
        // $this->form_validation->set_rules('address', 'address', 'trim');
        if($this->form_validation->run() == false){
        $data['title'] = 'Tambah Data Pegawai';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('manajemenpegawai/tambahpegawai', $data); 
        $this->load->view('templates/user/footer', $data);
        }
        else {
            $name=$this->input->post('name',true);
            $username=$this->input->post('username',true);
            $password=password_hash($this->input->post('password',true), PASSWORD_DEFAULT);
            $role_id=$this->input->post('role_id',true);
            $date_of_birth=$this->input->post('date_of_birth',true);
            $age=$this->input->post('age',true);
            $gender=$this->input->post('gender',true);
            // $address=$this->input->post('address',true);
            $is_active=1;
            $date_created=date('Y-m-d');

            $data=[
                "id_user"=>NULL,
                "name"=>$name,
                "username"=>$username,
                "password"=>$password,
                "role_id"=>$role_id,
                "date_of_birth"=>$date_of_birth,
                "age"=>$age,
                "gender"=>$gender,
                "is_active"=>$is_active,
                "date_created"=>$date_created
            ];
          
            $this->User_model->add_user($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->session->set_flashdata('data', 'Pegawai baru');
        
            redirect('Manajemenpegawai');
        }
    }

    public function editdatapegawai($id)
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
        $data['role']=$this->Role_model->get_role();
        $data['data']=$this->User_model->get_use_byID($id);
       
        $this->form_validation->set_rules('role_id', 'role_id', 'trim');
        $this->form_validation->set_rules('name', 'name', 'trim');
        $this->form_validation->set_rules('username', 'username', 'trim');
        $this->form_validation->set_rules('password', 'password', 'trim');
        
        $this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'trim');
        $this->form_validation->set_rules('age', 'age', 'trim');
        $this->form_validation->set_rules('gender', 'gender', 'trim');
        $this->form_validation->set_rules('address', 'address', 'trim');
        if($this->form_validation->run() == false){
        $data['title'] = 'Edit Data Pegawai';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('manajemenpegawai/editdatapegawai', $data); 
        $this->load->view('templates/user/footer', $data);
        }
        else {
            $id_user=$this->input->post('id_user',true);
            $name=$this->input->post('name',true);
            $username=$this->input->post('username',true);
            // $password=password_hash($this->input->post('password',true), PASSWORD_DEFAULT);
            $role_id=$this->input->post('role_id',true);
            $date_of_birth=$this->input->post('date_of_birth',true);
            $age=$this->input->post('age',true);
            $gender=$this->input->post('gender',true);
            // $address=$this->input->post('address',true);
            $is_active=1;
            $date_created=date('Y-m-d');
            // var_dump( $address);

            $data=[
                "name"=>$name,
                "username"=>$username,
                "role_id"=>$role_id,
                "date_of_birth"=>$date_of_birth,
                "age"=>$age,
                "gender"=>$gender,
                // "address"=>$address,
                "is_active"=>$is_active,
                "date_created"=>$date_created
            ];
            var_dump( $data);
            $this->User_model->update_user($id_user,$data);
            $this->session->set_flashdata('flash', 'Di update');
            $this->session->set_flashdata('data', 'Data Pegawai');
        
            redirect('Manajemenpegawai');

    }
    }
    public function hapus($id_user)
	{
        $this->db->where('id_user', $id_user);
        $this->db->delete('m_user');
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Data pegawai');
        $url="Manajemenpegawai";
		redirect($url);
	}
}