<?php
class User_model extends CI_model
{
    public function get_user()
    {
        return$this->db->query("SELECT * FROM  m_user natural join role")->result_array();
    }
    public function get_use_byID($id_user)
    {
        return$this->db->query("SELECT * FROM  m_user where id_user=$id_user")->row_array();
    }
    public function delete_user($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('m_user');
    }


    public function add_user($data){
        $this->db->insert('m_user', $data);
    }

    public function update_user(
        $id_user,
        $data
    
        ){
            $this->db->update('m_user', $data, ['id_user'=>$id_user]);
            return $this->db->affected_rows();
    }
}