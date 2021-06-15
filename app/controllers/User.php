<?php

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
    }

    public function profile()
    {
        $this->load->view("profile","refresh");
    }

    public function update()
    {
        if (isset($_POST['update'])) {
            
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('telephone','Telephone','required|min_length[5]');
            
            if ($this->form_validation->run() == TRUE) {

                $update_id = $_POST['update_id'];
                $data = array(
                    "username"=>$_POST['username'],
                    "email"=>$_POST['email'],
                    "password"=>md5($_POST['password']),
                    "gender"=>$_POST['gender'],
                    "created_date"=>date("Y-m-d"),
                    "telephone"=>$_POST['telephone'],
                );
                $username= array("username" => $_POST['username']);
                // $this->db->select("*");
                // $this->db->from("users");
                // $this->db->where("user_id = $update_id");
                // $query = $this->db->get();
                // $user = $query->row();

                $this->db->update('users',$data, "user_id = $update_id");
                $this->db->update('roles', $username, "user_id = $update_id" );
                

                $this->session->set_flashdata("success", "The account has been updated!");
                redirect("mail/index", "refresh");                
                
            }
            
        }
        
        // Load a View
        $this->load->view('update');
    }
    
     public function delete()
    {
        if (isset($_SESSION['delete'])) {
                
                $delete_id  = $_SESSION['delete_id'];

                $this->db->delete('users', "user_id = $delete_id");                

                $this->session->set_flashdata("success", "The account has been deleted!");
                redirect("mail/index", "refresh");                
                
            }
            
    }        
}


?>