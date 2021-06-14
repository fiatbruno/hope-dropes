<?php

class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    public function register(){
        
        if (isset($_POST['register'])) {
            
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('telephone','Telephone','required|min_length[5]');
            
            if ($this->form_validation->run() == TRUE) {
                // echo "Form Validated";
                
                // Add User to Database

                $data = array(
                    "username"=>$_POST['username'],
                    "email"=>$_POST['email'],
                    "password"=>md5($_POST['password']),
                    "gender"=>$_POST['gender'],
                    "created_date"=>date("Y-m-d"),
                    "telephone"=>$_POST['telephone']
                );

                $this->db->insert('users',$data);
                $this->session->set_flashdata("success", "Your account has been registered. You can login now");
                redirect("auth/login", "refresh");
                
                
            }
            
        }
        
        // Load a View
        $this->load->view('register');
    }

    public function logout(){
        unset($_SESSION);
        session_destroy();
        redirect("auth/login", "refresh");
    }

    public function login(){

            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');

            if ($this->form_validation->run() == TRUE) {

                $data = array(
                    "username"=>$_POST['username'],
                    "password"=>md5($_POST['password']),
                );
                
                // Check for user in Database
                $this->db->select("*");
                $this->db->from("users");
                $this->db->where($data);
                $query = $this->db->get();

                $user = $query->row();
                
                // If User exists
                
                if ($user->email) {
                    // Temporary Message

                    $this->session->set_flashdata("success", " Wow you logged in! :)");

                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['username'] = $user->username;
                    
                    // Redirect to profile page
                    redirect('user/profile', 'refresh');

                } else {

                    $this->session->set_flashdata("error", "No such Account! :(");
                    $_SESSION['user_logged'] = FALSE;

                    redirect('auth/login');
                }                                
        }
        // Load a View
        $this->load->view('login');
    }
    
}