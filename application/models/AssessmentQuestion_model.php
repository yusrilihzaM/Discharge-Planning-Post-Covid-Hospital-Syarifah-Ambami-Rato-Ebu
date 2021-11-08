<?php
class AssessmentQuestion_model extends CI_model
{
    public function get_assessment_question()
    {
        $this->db->select('*');
        $this->db->from('assessment_question');
        return $this->db->get()->result_array();
    }
    public function get_assessment_all()
    {
        return $this->db->query('SELECT * FROM assessment_question NATURAL JOIN assessment_type')->result_array();
    }
    public function get_assessment_question_byID($id_assessment_question)
    {
        $this->db->select('*');
        $this->db->from('assessment_question');
        $this->db->where('id_assessment_question',$id_assessment_question);
        return $this->db->get()->row_array();
    }
    public function get_assessment_answer($id_patient)
    {
        return $this->db->query("SELECT * FROM assessment_patient NATURAL JOIN assessment_answer WHERE id_patient=$id_patient ORDER BY id_assessment_question ASC")->result_array();
    }
    public function get_assessment_patient()
    {
        return $this->db->query("SELECT * FROM assessment_patient")->result_array();
    }
    public function delete_assessment_question($id_assessment_question){
        $this->db->where('id_assessment_question', $id_assessment_question);
        $this->db->delete('assessment_question');
    }


    public function add_assessment_question($data){
        $this->db->insert('assessment_question', $data);
    }

    public function update_assessment_question(
        $id_assessment_question,
        $data
    
        ){
            $this->db->update('assessment_question', $data, ['id_assessment_question'=>$id_assessment_question]);
    }
}