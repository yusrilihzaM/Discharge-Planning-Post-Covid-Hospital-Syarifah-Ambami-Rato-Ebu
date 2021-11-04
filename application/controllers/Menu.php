<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

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
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Manajemen Menu';

        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('menu/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru berhasil di tambahkan</div>');
        redirect('menu');
    }

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

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Tambah Menu';

        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('menu/add_menu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru berhasil di tambahkan</div>');
        redirect('menu');
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

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['title'] = 'Edit Menu';
        $data['data']=$this->db->get_where('user_menu', ['id_user_menu' => $id])->row_array();
       
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('menu/update_menu', $data); 
        $this->load->view('templates/user/footer', $data); 	
    } else {
        $id_user_menu=$this->input->post('id_user_menu',true);
        $menu=$this->input->post('menu',true);
        $this->db->set('menu',$menu);    
        $this->db->where('id_user_menu',$id_user_menu);
        $this->db->update('user_menu');
        $this->session->set_flashdata('flash', 'Di Perbarui');
        $this->session->set_flashdata('data', 'Menu');
        redirect('dataset');
    }

    }


    public function hapus($id_user_menu)
	{
        $this->db->where('id_user_menu', $id_user_menu);
        $this->db->delete('user_menu');
        $this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Menu');
        $url="Menu";
		redirect($url);
	}
}