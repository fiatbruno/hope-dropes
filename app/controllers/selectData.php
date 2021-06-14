<?php

class selectData extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    public function readData(){
        $this->load->database();
        $this->load->model('selection');
        $data['h']=$this->selection->getData();

        $this->load->view("select",$data);

    }
}
?>