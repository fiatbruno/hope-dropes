<?php

class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    // ! AJAX
    // public function getDistricts(){
    //     $this->load->model('location');
    //     $data = $this->location->getDistricts($_POST['provinceId']);
    //     $this->load->view('register', $data, TRUE);
    // }
    public function register(){
        if (isset($_POST['register'])) {
            
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('telephone','Telephone','required|min_length[5]');
            $this->form_validation->set_rules('role','Role','required');
            
            if ($this->form_validation->run() == TRUE) {
                // echo "Form Validated";
                
                // Add User to Database

                $data = array(
                    "username"=>$_POST['username'],
                    "email"=>$_POST['email'],
                    "password"=>md5($_POST['password']),
                    "gender"=>$_POST['gender'],
                    "created_date"=>date("Y-m-d"),
                    "telephone"=>$_POST['telephone'],
                );

                $isRole = $_POST['role'];

                $this->db->insert('users',$data);

                $this->db->select("*");
                $this->db->from("users");
                $this->db->where($data);
                $query = $this->db->get();
                $user = $query->row();

                $role = array(
                    "user_id"=> $user->user_id,
                    "username"=> $user->username,
                    "role"=> $isRole,
                );

                $this->db->insert('roles',$role);

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

                // Check for user in Database
                $this->db->select("*");
                $this->db->from("roles");
                $this->db->where('username', $data['username']);
                $roleQuery = $this->db->get();

                $role = $roleQuery->row();

                
                // If User exists
                
                if ($user->email) {
                    // Temporary Message


                    $_SESSION['user_logged'] = TRUE;
                    ($role->role == "admin") ? $_SESSION['admin']= TRUE : $_SESSION['admin'] = FALSE;
                    $_SESSION['username'] = $user->username;
                    $_SESSION['user_id'] = $user->user_id;
                    $_SESSION['email'] = $user->email;
                    
                    $getloc = json_decode(file_get_contents("http://ipinfo.io/"));
                    $coordinates = explode(",", $getloc->loc);

                    $data = array(
                        "user_id"=>$user->user_id,
                        "ip"=>$_SERVER['REMOTE_ADDR'],
                        "city"=> $getloc->city,
                        "region"=> $getloc->region,
                        "country"=> $getloc->country,
                        "latitude"=> $coordinates[0],
                        "longitude"=>$coordinates[1],
                        "postal"=>  ($getloc->postal == NULL) ? 0 : $getloc->postal,
                        "timezone"=> $getloc->timezone,
                    );

                    $this->db->insert('location',$data);
                    
                    // Redirect to profile page
                    redirect('dashboard/index', 'refresh');

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