<?php
class DrugPatient_model extends CI_model
{
    public function get_drugs_patient()
    {
        $this->db->select('*');
        $this->db->from('drugs_patient');
        return $this->db->get()->result_array();
    }
    public function get_drugs_patient_byID($id_drugs_patient)
    {
        $this->db->select('*');
        $this->db->from('drugs_patient');
        $this->db->where('id_drugs_patient',$id_drugs_patient);
        return $this->db->get()->row_array();
    }
    public function delete_drugs_patient($id_drugs_patient){
        $this->db->where('id_drugs_patient', $id_drugs_patient);
        $this->db->delete('drugs_patient');
    }


    public function add_drugs_patient($data){
        $this->db->insert('drugs_patient', $data);
    }

    public function update_drugs_patient(
        $id_drugs_patient,
        $drugs_patient
    
        ){
            $this->db->set('drugs_patient',$drugs_patient);
            $this->db->where('id_drugs_patient',$id_drugs_patient);
            $this->db->update('drugs_patient');
    }
}