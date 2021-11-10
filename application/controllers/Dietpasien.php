<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dietpasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Menu Diet Pasien';
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
        $this->load->view('dietpasien/index', $data); 
        $this->load->view('templates/user/footer', $data); 
    }
    public function save()
    {
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        $id_patient=$season_patient;
        $id_user=$season_user;
        $date_diet_nutrisionist=date("Y-m-d");

        $carbohydrate_morning=$this->input->post('carbohydrate_morning',true);
        $carbohydrate_afternoon=$this->input->post('carbohydrate_afternoon',true);
        $carbohydrate_evening=$this->input->post('carbohydrate_evening',true);
        $protein_morning=$this->input->post('protein_morning',true);
        $protein_afternoon=$this->input->post('protein_afternoon',true);
        $protein_evening=$this->input->post('protein_evening',true);
        $mineral_morning=$this->input->post('mineral_morning',true);
        $mineral_afternoon=$this->input->post('mineral_afternoon',true);
        $mineral_evening=$this->input->post('mineral_evening',true);
        $milks_morning=$this->input->post('milks_morning',true);
        $milks_afternoon=$this->input->post('milks_afternoon',true);
        $milks_evening=$this->input->post('milks_evening',true);
      

        $data=[
           "id_patient"=>$id_patient,
           "date_diet_nutrisionist"=>$date_diet_nutrisionist,
           "carbohydrate_morning"=>$carbohydrate_morning,
           "carbohydrate_afternoon"=>$carbohydrate_afternoon,
           "carbohydrate_evening"=>$carbohydrate_evening,
           "protein_morning"=>$protein_morning,
           "protein_afternoon"=>$protein_afternoon,
           "protein_evening"=>$protein_evening,
           "mineral_morning"=>$mineral_morning,
           "mineral_afternoon"=>$mineral_afternoon,
           "mineral_evening"=>$mineral_evening,
           "milks_morning"=>$milks_morning,
           "milks_afternoon"=>$milks_afternoon,
           "milks_evening"=>$milks_evening
       ];
       $this->db->insert("diet_patient",$data);
       $this->session->set_flashdata('flash', 'Di simpan');
       $this->session->set_flashdata('data', 'Menu Makanan Sehari');
       redirect('pasien');
    }
}