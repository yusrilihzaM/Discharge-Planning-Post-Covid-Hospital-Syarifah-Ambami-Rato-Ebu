<?php
class Role_model  extends CI_model
{
    public function get_role()
    {
        return$this->db->query("SELECT * FROM role")->result_array();
    }
    public function get_role_byID($role_id)
    {
        $this->db->select('*');
        $this->db->from('role');
        $this->db->where('role_id',$role_id);
        return $this->db->get()->row_array();
    }
    public function delete_role($role_id){
        $this->db->where('role_id', $role_id);
        $this->db->delete('role');
    }


    public function add_role($data){
        $this->db->insert('role', $data);
    }

    public function update_role(
        $role_id,
        $role
    
        ){
            $this->db->set('role',$role);
            $this->db->where('role_id',$role_id);
            $this->db->update('role');
    }
}