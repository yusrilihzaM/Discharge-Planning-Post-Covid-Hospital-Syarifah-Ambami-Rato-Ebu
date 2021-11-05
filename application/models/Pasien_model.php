<?php
class Pasien_model extends CI_model
{
    public function get_pasien()
    {
        return$this->db->query("SELECT * FROM  m_patient natural join medical_record")->result_array();
    }
    public function get_pasien_byID($id_patient)
    {
        return$this->db->query("SELECT * FROM  m_patient where id_patient=$id_patient")->row_array();
    }
    public function delete_pasien($id_patient){
        $this->db->where('id_patient', $id_patient);
        $this->db->delete('m_patient');
    }


    public function add_pasien($data){
        $this->db->insert('m_patient', $data);
    }

    public function update_pasien(
        $id_patient,
        $data
    
        ){
            $this->db->update('m_patient', $data, ['id_patient'=>$id_patient]);
            return $this->db->affected_rows();
    }
}