<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UpdateA extends CI_Controller {

    function __construct() {
        parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->model("getUsers");       
    }

    public function index(){
        $this->load->view('updateAccount');
    }
  
    public function update_user($id){
        $id = $this->uri->segment(3);
        // $this->load->view('Update_each_user');
        
        $data['updates'] = $this->getUsers->updateUserModel($id);
        $this->load->view('Update_each_user', $data);
    }

    public function editUserForm($id){
        // $id = $this->uri->segment(3);

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $telephone = $this->input->post('telephone');

        $data = array(
            'username' =>$username,
            'email' => $email,
            'gender' => $gender,
            'telephone' => $telephone
        );
        if($this->getUsers->editUserModel($id, $data)){
            $this->load->view("respondAdmin");
        }else{
            $this->load->view("Update_each_user");
        }
        
    }

    public function deleteUser($id){
        if($this->getUsers->deleteUserModel($id)){
            $this->load->view("respondAdmin");
        }else{
            $this->load->view("updateAccount");
        }
    }

    // Inserting new user
    public function insertUser(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $telephone = $this->input->post('telephone');

        $data = array(
            'username' =>$username,
            'email' => $email,
            'gender' => $gender,
            'telephone' => $telephone
        );

        $this->load->model('getUsers');
        if($this->getUsers->insert_user($data)){
            $this->load->view("respondAdmin");
        }else{
            $this->load->view("Update_each_user");
        }
    }

    public function displayUsers(){
        $result['users'] = $this->getUsers->displayData();
        $this->load->view('updateAccount',$result);
    }
}

?>