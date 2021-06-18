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
        $query = $this->db->query("SELECT user_id, username, email, gender, telephone, district, districtName, sector, sectorName from users u left join districts d on u.district=d.districtId left join sectors s on s.sectorId = sector where username='$username'");
        $data = $query->result();

        $getRole = $this->db->query("SELECT * from roles where username = '$username'");
        $role = $getRole->result();
        $this->load->view("profile", ['user'=>$data, 'role'=>$role]);
        // redirect("profile", ['user'=>$data, 'role'=>$role]);
    }

    public function updateForm(){
        // selecting all districts
        $query = $this->db->query("SELECT * from districts");
        $table = $query->result();

        // selecting sectors
        $sector = $this->db->query("SELECT * from sectors");
        $sectors = $sector->result();

        $username = $_SESSION["username"];

        // $editId = $_GET["id"];
        // $editQuery = $this->db->query("SELECT * FROM users where user_id = $editId");
        // $toEdit = $editQuery->result();

        $query = $this->db->query("SELECT user_id, username, email, gender, telephone, district, districtName, sector, sectorName from users u left join districts d on u.district=d.districtId left join sectors s on s.sectorId = sector where username='$username'");
        $data = $query->result();

        $query = $this->load->view("update", ['data'=>$data, 'table' => $table, 'sectors'=>$sectors]);
    }

    public function update(){
        if (isset($_POST["update"])) {
            
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('telephone','Telephone','required|min_length[5]');
            $this->form_validation->set_rules('sectorId','Sector','required');
            $this->form_validation->set_rules('districtId','Telephone','required');
            
            if ($this->form_validation->run() == TRUE) {

                // $update_id = $_POST['update_id'];
                $id=$_SESSION['user_id'];
                $data = array(
                    "username"=>$_POST['username'],
                    "email"=>$_POST['email'],
                    "gender"=>$_POST['gender'],
                    "telephone"=>$_POST['telephone'],
                    "district"=>$_POST['districtId'],
                    "sector"=>$_POST['sectorId']
                );

                $this->db->update('users',$data, "user_id = $id");
                // $this->db->update('roles', $username, "user_id = $update_id" );
                

                $this->session->set_flashdata("success", "The account has been updated!");
                // redirect("mail/index", "refresh");
                
            }
        }
        // Load a View
        redirect('User/profile');
    }
    
    public function delete(){
        // if (isset($_SESSION["delete"])){
                $delete_id  = $_GET['id'];

                $query = $this->db->delete("users", "user_id = $delete_id");

                if($query){
                    $this->session->set_flashdata("success", "The account has been deleted!");
                    redirect("select/index", "refresh");                
                }else{
                    $this->session->set_flashdata("success", "The account can not been deleted!");
                    redirect("select/index", "refresh");                
                }
                
                
        // }    
    }
}


?>