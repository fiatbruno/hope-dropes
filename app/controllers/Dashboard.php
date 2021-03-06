<?php
class Dashboard extends CI_Controller{
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

    public function index(){
        $this->load->model('home');   
        $data['a_pos'] = $this->home->countAplus(); 
        $data['a_neg'] = $this->home->countAneg(); 
        $data['b_pos'] = $this->home->countBplus(); 
        $data['b_neg'] = $this->home->countBneg(); 
        $data['ab_pos'] = $this->home->countABplus(); 
        $data['ab_neg'] = $this->home->countABneg(); 
        $data['o_pos'] = $this->home->countOplus(); 
        $data['o_neg'] = $this->home->countOneg(); 
        $this->load->view('dashboard',$data); 
   }
}
?>