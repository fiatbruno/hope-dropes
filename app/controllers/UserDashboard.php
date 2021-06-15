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
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $gender=$this->input->post('gender');
        $telephone=$this->input->post('telephone');
        $submit=$this->input->post('submit');

        if($submit){
            $this->load->model();
            $this->load>database();

             
            $send=$this->load->model('userupdate');  

            if($send){
                $this->load->view('userdashboard');
                echo "successful updation";
            }
            else{
                $this->load->view('userdashboard');
                echo "unable to update";
            }
        }
    }

    
}

?>