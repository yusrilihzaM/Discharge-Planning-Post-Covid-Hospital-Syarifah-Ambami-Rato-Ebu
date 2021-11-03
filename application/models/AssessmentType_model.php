<?php
class AssessmentType_model extends CI_model
{
    public function get_assessment_type()
    {
        $this->db->select('*');
        $this->db->from('assessment_type');
        return $this->db->get()->result_array();
    }
    public function get_assessment_type_byID($id_assessment_type)
    {
        $this->db->select('*');
        $this->db->from('assessment_type');
        $this->db->where('id_assessment_type',$id_assessment_type);
        return $this->db->get()->row_array();
    }
    public function delete_assessment_type($id_assessment_type){
        $this->db->where('id_assessment_type', $id_assessment_type);
        $this->db->delete('assessment_type');
    }


    public function add_assessment_type($data){
        $this->db->insert('assessment_type', $data);
    }

    public function update_assessment_type(
        $id_assessment_type,
        $assessment_type
    
        ){
            $this->db->set('assessment_type',$assessment_type);
            $this->db->where('id_assessment_type',$id_assessment_type);
            $this->db->update('assessment_type');
    }
}