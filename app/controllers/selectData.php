<?php

class selectData extends CI_Controller{
    function __construct(){
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
    }

    public function readData(){
        $this->load->database();
        $this->load->model('selection');
        $data['h']=$this->selection->getData();

        $this->load->view("select",$data);

    }
}
?>