<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlPatient extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
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
        $data['data']=$this->db->query("SELECT * FROM m_patient")->result_array();
       
        $data['title'] = 'Jadwal Kontrol Pasien';
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('controlpatient/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }

    public function history($id_patient)
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
        $data['data']=$this->db->query("SELECT * FROM m_patient natural join control_patient where id_patient=$id_patient")->result_array();
        $data['id_patient']=$this->db->query("SELECT * FROM m_patient where id_patient=$id_patient")->row_array()['id_patient'];
   
        $data['name']=$this->db->query("SELECT * FROM m_patient natural join control_patient where id_patient=$id_patient")->row_array()['name_patient'];
        $data['title'] = 'Jadwal Kontrol Pasien : '. $data['name'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('controlpatient/history_controlpatient', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function add($id_patient)
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
        $data['menu']=$this->db->query("SELECT * FROM m_patient")->result_array();
        $this->form_validation->set_rules('id_patient', 'id_patient', 'trim');
        $this->form_validation->set_rules('date_control_patient', 'date_control_patient', 'trim');
        $data['title'] = 'Jadwal Kontrol Pasien';
        $data['id_patient']=$this->db->query("SELECT * FROM m_patient where id_patient=$id_patient")->row_array()['id_patient'];
   
        $data['name']=$this->db->query("SELECT * FROM m_patient where id_patient=$id_patient")->row_array()['name_patient'];
        $nama_patient=$data['name'];
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('controlpatient/add_controlpatient', $data); 
        $this->load->view('templates/user/footer', $data); }
        else{
            $id_patient=$id_patient;    
            $date_control_patient=$this->input->post('date_control_patient');    
            $data=[
                "id_patient"=>$id_patient,
                "date_control_patient"=>$date_control_patient
            ];
            $this->db->insert("control_patient",$data);
            $this->session->set_flashdata('flash', 'Di buat');
            $this->session->set_flashdata('data', 'Jadwal Kontrol');
            $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Jadwal Kontrol Pasien $nama_patient Telah Di buat</div>");
            redirect('ControlPatient/history/'.$id_patient);
        }
    }

    public function edit($id_control_patient)
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
        $data['menu']=$this->db->query("SELECT * FROM m_patient")->result_array();
        $this->form_validation->set_rules('id_patient', 'id_patient', 'trim');
        $this->form_validation->set_rules('date_control_patient', 'date_control_patient', 'trim');
        $data['title'] = 'Jadwal Kontrol Pasien';

        $data['data']=$this->db->query("SELECT * FROM m_patient NATURAL JOIN control_patient WHERE id_control_patient=$id_control_patient")->row_array();
        
        $data['id_patient']=$data['data']['id_patient'];
   
        $data['name']=$data['data']['name_patient'];
        $nama_patient= $data['name'];
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('controlpatient/update_controlpatient', $data); 
        $this->load->view('templates/user/footer', $data); }
        else{
            $id_control_patient=$this->input->post('id_control_patient');   
            $id_patient= $data['id_patient'];    
            $date_control_patient=$this->input->post('date_control_patient');    
            $data=[
                "id_patient"=>$id_patient,
                "date_control_patient"=>$date_control_patient
            ];
            
            $this->db->update('control_patient', $data, ['id_control_patient'=>$id_control_patient]);
            
            $this->session->set_flashdata('flash', 'Di perbarui');
            $this->session->set_flashdata('data', 'Jadwal Kontrol');
            $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Jadwal Kontrol Pasien $nama_patient Telah Di Perbarui</div>");
            redirect('ControlPatient/history/'.$data['id_patient']);
        }
    }
    public function delete($id_control_patient){
        $data['data']=$this->db->query("SELECT * FROM m_patient NATURAL JOIN control_patient WHERE id_control_patient=$id_control_patient")->row_array();
        
        $data['id_patient']=$data['data']['id_patient'];
        $nama_patient=$data['name'];
        $data['name']=$data['data']['name_patient'];
        $this->db->where('id_control_patient',$id_control_patient);
        $this->db->delete("control_patient");
        $this->session->set_flashdata('flash', 'Dihapus');
		$this->session->set_flashdata('data', 'Jadwal Kontrol');
        $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Jadwal Kontrol Pasien $nama_patient Telah Di Hapus</div>");
        redirect('ControlPatient/history/'.$data['id_patient']);
    }
}