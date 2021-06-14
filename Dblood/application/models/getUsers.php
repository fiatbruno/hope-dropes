<?php
defined('BASEPATH') or exit('No direct script access allowed');
class getUsers extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function displayData(){
        $query = $this->db->query("SELECT * from users");
        return $query->result();
    }

    public function updateUserModel($id){
        return $this->db->get_where('users', array('user_id'=>$id))->result();
    }

    public function insert_user($data){
        return $this->db->insert('users', $data);
    }

    public function editUserModel($id, $data){
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }

    public function deleteUserModel($id){
        $this->db->where('user_id', $id);
        return $this->db->delete('users');
    }
}

?>