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
    public function delete_assessment_question($id_assessment_question){
        $this->db->where('id_assessment_question', $id_assessment_question);
        $this->db->delete('assessment_question');
    }


    public function add_assessment_question($data){
        $this->db->insert('assessment_question', $data);
    }

    public function update_assessment_question(
        $id_assessment_question,
        $assessment_question
    
        ){
            $this->db->set('assessment_question',$assessment_question);
            $this->db->where('id_assessment_question',$id_assessment_question);
            $this->db->update('assessment_question');
    }
}