<?php  
   class Donor extends CI_Controller  
   {  
      public function __construct()
      {
         parent::__construct();
         if ($_SESSION['user_logged'] == FALSE) {
               
               $this->session->set_flashdata("error", "Loggin' to access this page!");
               redirect("auth/login");
         }
         if ($_SESSION['admin'] == FALSE) {
            
            $this->session->set_flashdata("error", "You need Admin Permissions to access this page!");
            redirect("user/profile");
        }
      }

      public function index()  
      {  
         $this->load->database();  
         $this->load->model('donors');  
          $data['h']=$this->donors->select();  
         $this->load->view('donors', $data);  
      }  
   }  
?> 
