<?php
class Mail extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
    }

    public function index()  
    {  
       $this->load->database();  
       $this->load->model('mailing');  
        $data['h']=$this->mailing->select();  
       $this->load->view('mail', $data);  
    }  
}
?>