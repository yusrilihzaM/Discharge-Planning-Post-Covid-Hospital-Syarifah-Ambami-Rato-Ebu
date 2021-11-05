<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemenpasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('Pasien_model');
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
        $data['data'] = $this->Pasien_model->get_pasien();
        $data['title'] = 'Manajemen Pasien';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('manajemenpasien/index', $data); 
        $this->load->view('templates/user/footer', $data);
    }

    public function tambah()
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
        $this->form_validation->set_rules('id_user_menu', 'id_user_menu', 'trim');
        $this->form_validation->set_rules('name_patient', 'name_patient', 'trim');
        $this->form_validation->set_rules('nik_patient', 'nik_patient', 'trim');
        $this->form_validation->set_rules('password_patient', 'password_patient', 'trim');
        $this->form_validation->set_rules('date_of_birth_patient', 'date_of_birth_patient', 'trim');
        $this->form_validation->set_rules('age_patient', 'age_patient', 'trim');
        $this->form_validation->set_rules('gender_patient', 'gender_patient', 'trim');
        $this->form_validation->set_rules('address_patient', 'address_patient', 'trim');
       
        $data['title'] = 'Tambah Data Pasien';
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('manajemenpasien/tambahdatapasien', $data); 
        $this->load->view('templates/user/footer', $data); 	
        }else{
            $id_patient=$this->input->post('id_patient',true);
            $name_patient=$this->input->post('name_patient',true);
            $nik_patient=$this->input->post('nik_patient',true);
            $password_patient=password_hash($this->input->post('nik_patient'), PASSWORD_DEFAULT);
            $date_of_birth_patient=$this->input->post('date_of_birth_patient',true);
            $age_patient=$this->input->post('age_patient',true);
            $gender_patient=$this->input->post('gender_patient',true);
            $address_patient=$this->input->post('address_patient',true);
            $gender_patient=$this->input->post('gender_patient',true);
            date_default_timezone_set("Asia/Jakarta");
            $date_created_patient=date("YYYY-MM-DD h:i:sa");

            $data=[
                "id_patient"=>$id_patient,
                "name_patient"=>$name_patient,
                "nik_patient"=>$nik_patient,
                "password_patient"=>$password_patient,
                "date_of_birth_patient"=>$date_of_birth_patient,
                "age_patient"=>$age_patient,
                "gender_patient"=>$gender_patient,
                "address_patient"=>$address_patient,
                "date_created_patient"=>$date_created_patient,
                "role_id"=>5
            ];
          
            $this->Pasien_model->add_pasien($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->session->set_flashdata('data', 'Pasien baru');
        
            redirect('Manajemenpasien');
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
        $this->form_validation->set_rules('id_user_menu', 'id_user_menu', 'trim');
        $this->form_validation->set_rules('name_patient', 'name_patient', 'trim');
        $this->form_validation->set_rules('nik_patient', 'nik_patient', 'trim');
        $this->form_validation->set_rules('password_patient', 'password_patient', 'trim');
        $this->form_validation->set_rules('date_of_birth_patient', 'date_of_birth_patient', 'trim');
        $this->form_validation->set_rules('age_patient', 'age_patient', 'trim');
        $this->form_validation->set_rules('gender_patient', 'gender_patient', 'trim');
        $this->form_validation->set_rules('address_patient', 'address_patient', 'trim');
       
        $data['title'] = 'Edit Data Pasien';
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('manajemenpasien/editdatapasien', $data); 
        $this->load->view('templates/user/footer', $data); 	
        }else{
            $id_patient=$this->input->post('id_patient',true);
            $name_patient=$this->input->post('name_patient',true);
            $nik_patient=$this->input->post('nik_patient',true);
            $password_patient=$this->input->post('nik_patient',true);
            $date_of_birth_patient=$this->input->post('date_of_birth_patient',true);
            $age_patient=$this->input->post('age_patient',true);
            $gender_patient=$this->input->post('gender_patient',true);
            $address_patient=$this->input->post('address_patient',true);
            $gender_patient=$this->input->post('gender_patient',true);
            date_default_timezone_set("Asia/Jakarta");
            $date_created_patient=date("YYYY-MM-DD h:i:sa");

            $data=[
                "id_patient"=>$id_patient,
                "name_patient"=>$name_patient,
                "nik_patient"=>$nik_patient,
                "password_patient"=>$password_patient,
                "date_of_birth_patient"=>$date_of_birth_patient,
                "age_patient"=>$age_patient,
                "gender_patient"=>$gender_patient,
                "address_patient"=>$address_patient,
                "date_created_patient"=>$date_created_patient
            ];
            $this->Pasien_model->update_pasien($id_patient,$data );
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->session->set_flashdata('data', 'Pasien baru');
        
            redirect('Manajemenpasien');
        }
    }

    public function delete($id_patient)
	{
        $this->db->where('id_patient', $id_patient);
        $this->db->delete('m_patient');
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Data pasien');
        $url="Manajemenpasien";
		redirect($url);
	}
}

