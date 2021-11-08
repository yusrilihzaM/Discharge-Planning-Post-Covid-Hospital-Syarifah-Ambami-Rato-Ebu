<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class ViewPatient extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Pasien_model');
        $this->load->model('AssessmentType_model');
        $this->load->model('AssessmentQuestion_model');
        $this->load->model('ActivityType_model');
        $this->load->model('ActivityQuestion_model');
        $this->load->model('Reseppasien_model');
    }

    public function index()
    {
        ini_set('memory_limit', '-1');
        $data['title'] = 'Lihat Pasien';
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
          
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
         
        }
        // var_dump($data['user']);
        // die;

        $data['data'] = $this->Pasien_model->get_pasien();
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/index', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function detailpatient($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
           
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
        
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/detailpatient', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function resultdetection($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $data['deteksi'] = $this->db->get('assessment_question')->result_array();
        $data['answer'] = $this->AssessmentQuestion_model->get_assessment_answer($id);
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/resultdetection', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function activitypatient($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $id_patient=$data['data']['id_patient'];
        $data['activity_patient'] = $this->db->query("Select * from activity_patient where id_patient=$id_patient order by id_activity_patient")->result_array();
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/activitypatient', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }

    public function detailactivity($id_activity_patient){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
       
        
        $data['activity_question'] = $this->db->query("Select * from activity_question natural join activity_type order by id_activity_question")->result_array();
        $data['activity_answer'] = $this->db->query("Select * from activity_patient natural join activity_answer where id_activity_patient=$id_activity_patient order by id_activity_patient")->result_array();
        $id_patient=$data['activity_answer'][0]['id_patient'];
        // var_dump($data['activity_answer']);
        // die;
        $data['data']=$this->Pasien_model->get_pasien_byID($id_patient);
        $data['id_activity_patient']=$id_activity_patient;
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/detailactivity', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function medicine($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $id_patient=$data['data']['id_patient'];
        $data['id_patient']=$data['data']['id_patient'];
        $data['drugs_patient'] = $this->db->query("Select DISTINCT(date_drugs_patient) from drugs_patient where id_patient=$id_patient order by id_drugs_patient")->result_array();
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/medicine', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }
    public function detailmedicine(){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        $id_patient=$this->uri->segment(3);
        $date_drugs_patient= str_replace("%"," ",$this->uri->segment(4));
       
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['obat_pagi']=$this->db->query("SELECT * FROM drugs_patient where date_drugs_patient=date_drugs_patient and type='Obat Pagi'")->row_array()['drug'];
        $data['obat_malam']=$this->db->query("SELECT * FROM drugs_patient where date_drugs_patient=date_drugs_patient and type='Obat Malam'")->row_array()['drug'];
        $data['obat_siang']=$this->db->query("SELECT * FROM drugs_patient where date_drugs_patient=date_drugs_patient and type='Obat Siang'")->row_array()['drug'];
        $id=$this->db->query("SELECT id_patient FROM drugs_patient where date_drugs_patient=date_drugs_patient and type='Obat Siang'")->row_array();
        $data['data']=$this->Pasien_model->get_pasien_byID($id_patient);
        $data['id_patient']=$data['data']['id_patient'];
       
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/detailmedicine', $data); 
        $this->load->view('templates/user/footer', $data); 	

    }
    public function historyprescription($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $id_patient=$data['data']['id_patient'];
        $data['prescription_patient'] = $this->db->query("Select * from prescription_patient where id_patient=$id_patient order by id_prescription_patient asc")->result_array();
        $data['title'] = $data['data']['name_patient'];
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/historyprescription', $data); 
        $this->load->view('templates/user/footer', $data); 	
    }

    public function addprescription($id){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
       
      
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id);
        $data['name_patient']= $data['data']['name_patient'];
        $data['id_user']=$season_user;
        $id_patient=$data['data']['name_patient'];
        $data['activity_patient'] = $this->db->query("Select * from activity_patient where id_patient=$id_patient order by id_activity_patient")->result_array();
        $data['title'] = $data['data']['name_patient'];
        $nama_patient= $data['name_patient'];
        $this->form_validation->set_rules('id_user', 'id_user', 'trim');
        $this->form_validation->set_rules('prescription', 'prescription', 'trim');
        $this->form_validation->set_rules('id_patient', 'id_patient', 'trim');
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/addprescription', $data); 
        $this->load->view('templates/user/footer', $data); 	
        }
        else{
            $id_user=$this->input->post('id_user',true);
            $date_prescription_patient=date('Y-m-d H:i:s');
            $prescription=$this->input->post('prescription');
            $status="Menunggu validasi";
            $id_patient1=$this->input->post('id_patient',true);
            $data=[
               "id_user"=>$id_user,
               "date_prescription_patient"=>$date_prescription_patient,
               "prescription"=>$prescription,
               "status"=>$status,
               "id_patient"=>$id_patient1
           ];
           $this->db->insert("prescription_patient",$data);
           $this->session->set_flashdata('flash', 'Di buat');
           $this->session->set_flashdata('data', 'Resep Obat');
       
           $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Resep Pasien $nama_patient Telah Dibuat</div>");
           redirect('ViewPatient');
        }
    }
    public function updateprescription(){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        $id_patient=$this->uri->segment(3);
        $id_prescription_patient= $this->uri->segment(4);
      
        if($season_user){
            $data['user'] = $this->db->query("Select * FROM m_user natural join role where id_user=$season_user")->row_array();
            $data['name'] = $this->db->get_where('m_user', ['id_user' => $season_user])->row_array()["name"];
            $data['role'] = $data['user']["role"];
            $data['date_of_birth'] = $data['user']["date_of_birth"];
            $data['age'] = $data['user']["age"];
            $data['address'] = $data['user']["address"];
            
        }
        elseif($season_patient){
            $data['user'] = $this->db->query("Select * FROM m_patient natural join role where id_patient=$season_patient")->row_array();
            // $data['user'] = $this->db->query("Select * FROM m_patient natural join role natural join m_provinsi natural join m_kab_kota natural join m_kecamatan natural join m_kelurahan ")->row_array();
            $data['name'] = $this->db->get_where('m_patient', ['id_patient' => $season_patient])->row_array()["name_patient"];
            $data['role'] = $data['user']["role"];
            $data['age'] = $data['user']["age_patient"];
            $data['address'] = $data['user']["address_patient"];
           
        }
        $data['data']=$this->Pasien_model->get_pasien_byID($id_patient);
       
        $data['name_patient']= $data['data']['name_patient'];
        $data['id_user']=$season_user;
        $id_patient=$data['data']['name_patient'];
        $data['activity_patient'] = $this->db->query("Select * from activity_patient where id_patient=$id_patient order by id_activity_patient")->result_array();
        $data['title'] = "Resep".$data['data']['name_patient'];
        $nama_patient= $data['name_patient'];
        $data['data_resep']=$this->db->query("SELECT * FROM prescription_patient WHERE id_prescription_patient=$id_prescription_patient AND id_patient=$id_patient")->row_array();
        
        $this->form_validation->set_rules('id_user', 'id_user', 'trim');
        $this->form_validation->set_rules('prescription', 'prescription', 'trim');
        $this->form_validation->set_rules('id_patient', 'id_patient', 'trim');
        if($this->form_validation->run() == false){
        $this->load->view('templates/user/header', $data); 
		$this->load->view('templates/user/navbar', $data); 	
        $this->load->view('templates/user/left_menu', $data); 	
        $this->load->view('viewpatient/updateprescription', $data); 
        $this->load->view('templates/user/footer', $data); 	
        }
        else{
            $id_prescription_patient=$this->input->post('id_prescription_patient',true);
            $id_user=$this->input->post('id_user',true);
            $date_prescription_patient=date('Y-m-d H:i:s');
            $prescription=$this->input->post('prescription');
            $status="Menunggu validasi";
            $id_patient1=$this->input->post('id_patient',true);
            $data=[
               "id_user"=>$id_user,
               "date_prescription_patient"=>$date_prescription_patient,
               "prescription"=>$prescription,
               "status"=>$status,
               "id_patient"=>$id_patient1
           ];
           $this->db->set('prescription',$prescription);
            $this->db->where('id_prescription_patient',$id_prescription_patient);
            $this->db->update('prescription_patient');
           $this->session->set_flashdata('flash', 'Di perbarui');
           $this->session->set_flashdata('data', 'Resep Obat');
       
           $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Resep Pasien $nama_patient Telah Diperbarui</div>");
           redirect('ViewPatient');
        }
    }
    public function hapusprescription(){
        $season_user=$this->session->userdata('id_user');
        $season_patient=$this->session->userdata('id_patient');
        $id_patient=$this->uri->segment(3);
        $id_prescription_patient= $this->uri->segment(4);
      
        $data['data']=$this->Pasien_model->get_pasien_byID($id_patient);
       
        $data['name_patient']= $data['data']['name_patient'];
        $data['id_user']=$season_user;
        $id_patient=$data['data']['name_patient'];
        $nama_patient= $data['name_patient'];
        $data['data_resep']=$this->db->query("SELECT * FROM prescription_patient WHERE id_prescription_patient=$id_prescription_patient AND id_patient=$id_patient")->row_array();
        
      
        $this->db->where('id_prescription_patient',$id_prescription_patient);
        $this->db->delete('prescription_patient');
        $this->session->set_flashdata('flash', 'Di hapus');
        $this->session->set_flashdata('data', 'Resep Obat');
        $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Resep Pasien $nama_patient Telah Di hapus</div>");
        redirect('ViewPatient');
        
    }
}