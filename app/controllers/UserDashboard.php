<?php 
class UserDashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
    }
    function displaydashboard(){
        
        $username = $_SESSION["username"];
        $id = $_SESSION['user_id'];

        $query = $this->db->query("SELECT * FROM appointments where username = '$username'");
        $query = $query->result();
        
        $bloodExist = $this->db->query("SELECT * from blood b inner join roles r on b.user_id = r.user_id where b.user_id=$id");
        $bloodExist = $bloodExist -> result();
        
        $this->load->view('userdashboard', ['data'=>$query, 'blood'=>$bloodExist]);
    }

    function userprofile(){
        $this->load->view('usersprofile');
    }

    public function updateprofile(){
        $userid =$_SESSION['user_id'];
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('telephone','telephone','required');
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $gender=$this->input->post('gender');
        $telephone=$this->input->post('telephone');
        $submit=$this->input->post('submit');

        if($submit){
             
            $send=$this->load->model('userupdate');  
            $send2=$this->userupdate->updateuser($username,$email,$password,$gender,$telephone,$userid);

            if($send2){
                $this->load->view('userdashboard');
                $this->session->set_flashdata("message","successfully updated account");
            }
            else{
                $this->load->view('userdashboard');
                $this->session->set_flashdata("message","unsuccessfully update account");
            }
        }
    }

    public function makeappointment(){
        $username= $_SESSION['username'];
        $this->form_validation->set_rules('date','date','required');
        $date = $this->input->post('date');

        $this->load->model('appoint');
        $send = $this->appoint->appointment($username,$date);

        $data = $this->db->query("SELECT * from appointments where username = '$username'");
        $data->result();
        
        
        if($send){
            $this->load->view("userdashboard", ['data'=>$data, 'save'=>$send]);
            $this->session->set_flashdata("message","successfully saved appointment");
        }
        else{
            // $this->load->view("userdashboard");
            $sdata['b']= $this->session->set_flashdata("message","unable to save appointment");
            redirect('UserDashboard/displaydashboard',[$sdata, $data]);

        }
    }

    public function updateForm(){
        $id = $this->input->get("id");
        $query = $this->db->query("SELECT * from appointments where appointId = '$id'");
        $data = $query->result();
        if($query->result()){
            $this->load->view("updateEventForm", ['data'=>$data]);
        }

    }
    
    public function updateAppointment(){
        $id = $this->input->post("id");
        $newDate = $this->input->post("newDate");
        $query = $this->db->query("UPDATE appointments set data = '$newDate' where appointId = $id");
        
        if($query){
            redirect("UserDashboard/displaydashboard");
        }
    }

    public function deleteAppointment(){
        $id = $this->input->get("id");
        $username = $_SESSION['username'];
        $query = $this->db->query("DELETE from appointments where appointId = '$id' AND username='$username'");

        $data = $this->db->query("SELECT * from appointments where username = '$username'");
        $data->result();
        
        if($query){
            redirect('UserDashboard/displaydashboard', $data);
        }else{
            echo "Unable to delete";
        }
    }
    
}

?>