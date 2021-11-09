<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disclaimer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Disclaimer';
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

        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('disclaimer/index', $data); 
        $this->load->view('templates/user/footer', $data); 
    } 
    
    public function ubah()
    
    {
        $data['title'] = 'Ubah Disclaimer';
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        $data['disclaimer']=$this->db->get('disclaimer')->row_array();

        if($season_user){
            $data['user'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
        }
        elseif($season_patient){
            $data['user'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
        } 
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/user/header', $data); 
            $this->load->view('templates/user/navbar', $data); 	
            $this->load->view('templates/user/left_menu', $data); 	
            $this->load->view('disclaimer/ubah', $data); 
            $this->load->view('templates/user/footer', $data); 
        } else { 

            $disclaimer['img_name'] = $this->input->post('img_name'); 
            
            // jika ada gambar yang akan di upload
            $upload_image = $_FILES['img_name'];

            if($upload_image) { // ada gambar/file yang di upload
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '20048';
                $config['upload_path'] = './assets/img/profil/';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('img_name')) { // gambar berhasil di upload

                    $old_image = $data['disclaimer']['img_name'];
                    if($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profil/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name'); 
                    $this->db->set('img_name', $new_image);

            }  else {
                echo $this->upload->display_errors();
                
            }

        }

            $this->db->set('img_name', $data['disclaimer']);
            $this->db->where('img_name', $data['disclaimer']);
            $this->db->update('disclaimer');
        
            } 
        
        } 
    }
