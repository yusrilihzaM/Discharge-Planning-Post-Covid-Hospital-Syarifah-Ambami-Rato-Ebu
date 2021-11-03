<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index()
    {
        ini_set('memory_limit', '-1');
        $data['title'] = 'Beranda Dokter';
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            $data['provinsi'] = $this->db->query("Select * FROM m_user natural join role natural join m_provinsi where id_user=$season_user")->row_array()['provinsi'];
            $data['kota'] = $this->db->query("Select * FROM m_user natural join role natural join  m_kab_kota  where id_user=$season_user")->row_array()['kabupaten_kota'];
            $data['kecamatan'] = $this->db->query("Select * FROM m_user natural join role  natural join m_kecamatan where id_user=$season_user")->row_array()['kecamatan'];
            $data['kelurahan'] = $this->db->query("Select * FROM m_user natural join role  natural join m_kelurahan where id_user=$season_user")->row_array()['kelurahan'];
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_user natural join rolewhere id_patient=$season_patient")->row_array();
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            $data['provinsi'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi  where id_user=$season_user")->row_array()['provinsi'];
            $data['kota'] = $this->db->query("Select * FROM m_patient natural join role natural join  m_kab_kota  where id_user=$season_user")->row_array()['kabupaten_kota'];
            $data['kecamatan'] = $this->db->query("Select * FROM m_patient natural join role  natural join m_kecamatan where id_user=$season_user")->row_array()['kecamatan'];
            $data['kelurahan'] = $this->db->query("Select * FROM m_patient natural join role  natural join m_kelurahan where id_user=$season_user")->row_array()['kelurahan'];
        }
        
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('profile/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
}