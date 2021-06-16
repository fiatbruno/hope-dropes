<?php 
class UserDashboard extends CI_Controller{

    // function __construct(){
    //     parent ::__construct;
    // }
    function displaydashboard(){
        $this->load->view('userdashboard');
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
            // $this->load->model();
            // $this->load>database();

             
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
        $username=$_SESSION['username'];
        $this->form_validation->set_rules('date','date','required');
        $date=$this->input->post('date');

        $this->load->database();
        $this->load->model('appoint');
        $send=$this->appoint->appointment($username,$date);
        if($send){
            $this->load->view("userdashboard");
            $this->session->set_flashdata("message","successfully saved appointment");
        }
        else{
            // $this->load->view("userdashboard");
            $sdata['b']=$this->session->set_flashdata("message","unable to save appointment");
            redirect('UserDashboard/displaydashboard',$sdata);

        }
    }

    
}

?>