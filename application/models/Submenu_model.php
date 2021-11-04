<?php
class Submenu_model extends CI_model
{
    public function get_user_sub_menu()
    {
        return$this->db->query("SELECT * FROM user_menu NATURAL JOIN user_sub_menu")->result_array();
    }
    public function get_user_sub_menu_byID($id_user_sub_menu)
    {
        $this->db->select('*');
        $this->db->from('user_sub_menu');
        $this->db->where('id_user_sub_menu',$id_user_sub_menu);
        return $this->db->get()->row_array();
    }
    public function delete_user_sub_menu($id_user_sub_menu){
        $this->db->where('id_user_sub_menu', $id_user_sub_menu);
        $this->db->delete('user_sub_menu');
    }


    public function add_user_sub_menu($data){
        $this->db->insert('user_sub_menu', $data);
    }

    public function update_user_sub_menu(
        $id_user_sub_menu,
        $user_sub_menu
    
        ){
            $this->db->set('user_sub_menu',$user_sub_menu);
            $this->db->where('id_user_sub_menu',$id_user_sub_menu);
            $this->db->update('user_sub_menu');
    }
}