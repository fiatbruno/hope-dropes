<?php

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['user_id'] == NULL) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
        if ($_SESSION['user_logged'] == FALSE) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
    }

    public function profile()
    {
        $username = $_SESSION['username'];
        $query = $this->db->query("SELECT * from users where username = '$username'");
        $data = $query->result();

        $getRole = $this->db->query("SELECT * from roles where username = '$username'");
        $role = $getRole->result();
        $this->load->view("profile", ['user'=>$data, 'role'=>$role]);
    }

    public function updateForm(){
        $username = $_SESSION["username"];
        $query = $this->db->query("SELECT * from users where username = '$username'");
        $data = $query->result();

        $query = $this->load->view("update", ['data'=>$data]);
    }

    public function update(){
        if (isset($_POST["update"])) {
            
            $this->form_validation->set_rules('username','Username','required||is_unique[users.username]');
            $this->form_validation->set_rules('email','Email','required||is_unique[users.email]');
            $this->form_validation->set_rules('telephone','Telephone','required|min_length[5]');
            
            if ($this->form_validation->run() == TRUE) {

                // $update_id = $_POST['update_id'];
                $id=$_SESSION['user_id'];
                $data = array(
                    "username"=>$_POST['username'],
                    "email"=>$_POST['email'],
                    "gender"=>$_POST['gender'],
                    "telephone"=>$_POST['telephone'],
                );

                $this->db->update('users',$data, "user_id = $id");
                // $this->db->update('roles', $username, "user_id = $update_id" );
                

                $this->session->set_flashdata("success", "The account has been updated!");
                // redirect("mail/index", "refresh");
                
            }
        }
        // Load a View
        $this->load->view('update');
    }
    
    public function delete(){
        if (isset($_SESSION["delete"])){
                $delete_id  = $_SESSION['delete_id'];

                $this->db->delete("users", "user_id = $delete_id");                

                $this->session->set_flashdata("success", "The account has been deleted!");
                redirect("mail/index", "refresh");                
                
        }    
    }
}


?>