<?php
class Reseppasien_model extends CI_model
{
    public function get_prescription_patient()
    {
        $this->db->select('*');
        $this->db->from('prescription_patient');
        return $this->db->get()->result_array();
    }
    public function get_prescription_patient_byID($id_prescription_patient)
    {
        $this->db->select('*');
        $this->db->from('prescription_patient');
        $this->db->where('id_prescription_patient',$id_prescription_patient);
        return $this->db->get()->row_array();
    }
    public function delete_prescription_patient($id_prescription_patient){
        $this->db->where('id_prescription_patient', $id_prescription_patient);
        $this->db->delete('prescription_patient');
    }


    public function add_prescription_patient($data){
        $this->db->insert('prescription_patient', $data);
    }

    public function update_prescription_patient(
        $id_prescription_patient,
        $prescription_patient
    
        ){
            $this->db->set('prescription',$prescription_patient);
            $this->db->where('id_prescription_patient',$id_prescription_patient);
            $this->db->update('prescription_patient');
    }
}