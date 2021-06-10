<?php

class Blood extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['user_logged'] == false) {
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
    }

    public function chooseBlood()
    {
        // if($this->input->post('blood-group')):
        $this->form_validation->set_rules('blood-group[]', 'blood-group', 'required');
        // endif;

        // if($this->input->post('blood-group-sign')):
        $this->form_validation->set_rules('blood-group-sign[]', 'blood-group-sign', 'required');
        // endif;

        if ($this->form_validation->run() == TRUE) {
            
            $bloodgroup = $_POST['blood-group'];
            $bloodgroupsign = ($_POST['blood-group-sign']);

            if (isset($bloodgroup)) {
                    // Temporary Message

                    $this->session->set_flashdata("success", " You will soon get an Email! :)");

                    // Redirect to profile page
                    redirect('user/profile', 'refresh');

                }
        }

        $this->load->view("blood");
    }
}


?>