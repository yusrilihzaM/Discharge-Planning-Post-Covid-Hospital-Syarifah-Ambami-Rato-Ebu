<?php
class ActivityQuestion_model extends CI_model
{
    public function get_activity_question()
    {
        $this->db->select('*');
        $this->db->from('activity_question');
        return $this->db->get()->result_array();
    }
    public function get_activity_all()
    {
        return $this->db->query('SELECT * FROM activity_question NATURAL JOIN activity_type')->result_array();
    }
    public function get_activity_question_byID($id_activity_question)
    {
        $this->db->select('*');
        $this->db->from('activity_question');
        $this->db->where('id_activity_question',$id_activity_question);
        return $this->db->get()->row_array();
    }
    public function get_activity_answer($id_patient)
    {
        return $this->db->query("SELECT * FROM activity_patient NATURAL JOIN activity_answer WHERE id_patient=$id_patient ORDER BY id_activity_question ASC")->result_array();
    }
    public function get_activity_patient()
    {
        return $this->db->query("SELECT * FROM activity_patient")->result_array();
    }
    public function delete_activity_question($id_activity_question){
        $this->db->where('id_activity_question', $id_activity_question);
        $this->db->delete('activity_question');
    }


    public function add_activity_question($data){
        $this->db->insert('activity_question', $data);
    }

    public function update_activity_question(
        $id_activity_question,
        $data
    
        ){
            $this->db->update('activity_question', $data, ['id_activity_question'=>$id_activity_question]);
    }
}