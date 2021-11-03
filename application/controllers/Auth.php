<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    
    }
    public function index()
	{

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
        $data['nama'] = "Masuk";
		$this->load->view('auth/index.php', $data);
        }
        else{
            $nik=$this->input->post('nik');
            $password=$this->input->post('password');

            $user=$this->db->get_where('m_patient', ['nik_patient' => $nik])->row_array();

            // jika usernya ada 
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek pasword
                if (password_verify($password, $user['password_patient'])) {
                    $data = [
                        'id_patient' => $user['id_patient'],
                        'role_id' => $user['role_id'] // menentukan menu
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 5) {
                        redirect('pasien');
                    } 
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akunmu belum melakukan deteksi mandiri</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak ada</div>');
            redirect('auth');
        }
        }
	}

    public function logout() // tugasnya mengembalikan login
    {

        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $this->session->unset_userdata('id_user');
            $this->session->unset_userdata('role_id');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah keluar</div>');
            redirect('worker');
        }
        else
        if($season_patient){
            $this->session->unset_userdata('id_patient');
            $this->session->unset_userdata('role_id');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah keluar</div>');
            redirect('auth');
        }


    }
}