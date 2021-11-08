<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
        ini_set('memory_limit', '-1');
        $data['title'] = 'Profil';
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
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
            $data['provinsi'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi  where id_patient=$season_patient")->row_array()['provinsi'];
            $data['kota'] = $this->db->query("Select * FROM m_patient natural join role natural join  m_kab_kota  where id_patient=$season_patient")->row_array()['kabupaten_kota'];
            $data['kecamatan'] = $this->db->query("Select * FROM m_patient natural join role  natural join m_kecamatan where id_patient=$season_patient")->row_array()['kecamatan'];
            $data['kelurahan'] = $this->db->query("Select * FROM m_patient natural join role  natural join m_kelurahan where id_patient=$season_patient")->row_array()['kelurahan'];
        }
        // var_dump($data['user']);
        // die;
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('profile/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }



    public function password()
	{
        $data['title'] = 'Profil';
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['password'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["password"];
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['password'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["password_patient"];
        }


        $this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim');
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required|trim|min_length[6]');
        $this->form_validation->set_rules('password_baru2', 'Ulangi password baru', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == false)
        {
            $this->load->view('templates/user/header', $data); 
            $this->load->view('templates/user/navbar', $data); 	
            $this->load->view('templates/user/left_menu', $data); 	
            $this->load->view('profile/password', $data); 
            $this->load->view('templates/user/footer', $data); 	
        } 
        else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru1');
            $password_baru2 = $this->input->post('password_baru2');
            $coba=password_verify($password_lama,  $data['password']);
            // echo("password_lama:$coba<br>");
            // die;
            if(!password_verify($password_lama, $data['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password lama salah!</div>');
                redirect('profil/password');
            } else {
                if ($password_lama == $password_baru) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password baru tidak boleh sama dengan password lama!</div>');
                redirect('profil/password');
                }
                else if ($password_baru != $password_baru2) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Ulangi password baru harus sama dengan password baru</div>');
                redirect('profil/password');
                } 
                else {
                    # password yg benar
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    if($season_user){
                    $this->db->set('password', $password_hash);
                    $this->db->where('id_user', $season_user);
                    $this->db->update('m_user'); 
                    }
                    else if ($season_patient){
                    $this->db->set('password_patient', $password_hash);
                    $this->db->where('id_patient', $season_patient);
                    $this->db->update('m_patient');         
                    }

                    $this->session->set_flashdata('message', '<div class="alert alert-sucsess" role="alert"> Password berhasil diubah!</div>');
                    redirect('profil/password');
                }
            }
        }
	}
    // public function changepassword(){
    //         $password_lama = $this->input->post('password_lama');
    //         $password_baru = $this->input->post('password_baru1');
    //         $password_baru2 = $this->input->post('password_baru2');
    //         echo("password_baru:$password_baru<br>");
    //         echo("password_baru2:$password_baru2<br>");
    // }
}