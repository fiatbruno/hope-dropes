<?php

class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function register(){
        // selecting all districts
        $query = $this->db->query("SELECT * from districts");
        $table = $query->result();

        // selecting sectors
        $sector = $this->db->query("SELECT * from sectors");
        $sectors = $sector->result();

        if (isset($_POST['register'])) {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('telephone','Telephone','required|min_length[5]');
            $this->form_validation->set_rules('role','Role','required');
            $this->form_validation->set_rules('districtId','District','required');
            $this->form_validation->set_rules('sectorId','Sector','required');
            
            if ($this->form_validation->run() == TRUE) {
                //! Role
                // Add User to Database

                $data = array(
                    "username"=>$_POST['username'],
                    "email"=>$_POST['email'],
                    "password"=>md5($_POST['password']),
                    "gender"=>$_POST['gender'],
                    "district"=>$_POST['districtId'], 
                    "sector"=>$_POST['sectorId'],
                    "created_date"=>date("Y-m-d"),
                    "telephone"=>$_POST['telephone'],
                );

                // $isRole = $_POST['role'];
                $user_input = $data["username"];
                $email_input = $data["email"];
                $seeQuery = $this->db->query("SELECT * from users where username ='$user_input' OR email = '$email_input'");
                $num = $seeQuery->num_rows();
                echo $num;
                if($num>0){
                    $this->session->set_flashdata("user_exist", "User with same email or username already exist!");
                }else{
                    $this->db->insert('users',$data);

                    $query = $this->db->query("SELECT * FROM users where username='$user_input' AND email='$email_input'");
                    $user = $query->row();
    
                    $roleName = $this->input->post("role");
    
                    $role = array(
                        "user_id"=> $user->user_id,
                        "username"=> $user_input,
                        "role"=> $roleName,
                    );

                    $this->db->insert('roles',$role);
                    // $query = $this->db->query("SELECT * FROM users where username='$user_input' AND email='$email_input'");
                    // $user = $query->row();
    
                    $_SESSION['user_logged'] = TRUE;
                    // ($role->role == "admin") ? $_SESSION['admin'] = TRUE : $_SESSION['admin'] = FALSE;
                    $_SESSION['username'] = $user_input;
                    $_SESSION['user_id'] = $user->user_id;
                    $_SESSION['email'] = $email_input;
                    
                    
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
                    
                    redirect('userdashboard/displaydashboard');
                }
                
            }
            
        }
        
        // Load view
        $this->load->view('register', ['table' => $table, 'sectors'=>$sectors]);
        
    }

    public function logout(){
        unset($_SESSION);
        session_destroy();
        $_SESSION['user_logged'] = FALSE;
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
                    ($role->role == "admin") ? $_SESSION['admin'] = TRUE : $_SESSION['admin'] = FALSE;
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
                    
                    
                    if ($_SESSION['admin'] == true) {
                        // Redirect to profile page
                        redirect('dashboard/index');
                    }
                    else {
                        redirect('userdashboard/displaydashboard');
                    }

                } else {

                    $this->session->set_flashdata("error", "No such Account! :(");
                    $_SESSION['user_logged'] = FALSE;

                    redirect('auth/login');
                }                                
        }
        // Load a View
        $this->load->view('login');
    }

    public function reset(){
        $this->load->view("reset");
    }

    public function send_email(){
        $from_email = "eumuhoza83@gmail.com";
        $to_email = $this->input->post('email');

        $this->db->select("*");
        $this->db->from("users");
        $this->db->where('email', $to_email);
        $roleQuery = $this->db->get();

        $user = $roleQuery->num_rows();
    
        if($user>0){
            //SMTP & mail configuration
            $this->load->library('email'); 
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'eumuhoza83@gmail.com',
                'smtp_pass' => 'sawasawa04!',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1'
            );
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
        
            //Email content
            $htmlContent = '<h1>Password Reset</h1>';
            $htmlContent .= '<p>Follow the given link to change your password</p>';
            $htmlContent .= "<p>If you don't know about us, simply ignore this.</p>";
            $htmlContent .="<a href='http://localhost/hope-drops/Auth/reset_Page?email=".$to_email."'>Reset password</a>";
        
            $this->email->to($to_email);
            $this->email->from("eumuhoza83@gmail.com", 'Hope blood');
            $this->email->subject('Password Reset');
            $this->email->message($htmlContent);
        
            if($this->email->send()){
                $this->session->set_flashdata("email", "Reset password link sent on email");
                $this->load->view('reset');
            }else{
                $this->session->set_flashdata("email", "Unable to send");
                // show_error($this->email->print_debugger());
                // $this->load->view('email_sent');
                $this->load->view('reset');
            }
        }else{
            $this->session->set_flashdata("email_found", "Person with same email not found");
            $this->load->view('reset');
        }
    }
    
    public function reset_Page(){
        $this->load->view("changePassword");
    }

    public function changePassword(){
        $password = $this->input->post("password");
        $confPass = $this->input->post("confPassword");
        $email = $this->input->post("email");

        if(!strcmp($password, $confPass)){
            // hashin password
            $hashedPass = md5($password);

            $query = $this->db->query("UPDATE users set password = '".$hashedPass ."' where email = '".$email."'");
            
            if($query){
                echo "Password Changed successfully!";
                echo "<br><a href='".base_url()."Auth/login'>Login</a>";
            }
        }else{
            ECHO "Password and confirm passowrd must be equal";
        }
    }
}