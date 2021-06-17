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

    public function chooseBlood(){
        $this->form_validation->set_rules('blood-group[]', 'blood-group', 'required');
        $this->form_validation->set_rules('blood-group-sign[]', 'blood-group-sign', 'required');

        if ($this->form_validation->run() == TRUE) {

            $bloodgroup = $_POST['blood-group'];
            $bloodgroupsign = ($_POST['blood-group-sign']);

            if (isset($bloodgroup)) {
                    // Temporary Message
                    $user_id = $_SESSION['user_id'];
                    $selectQuery="SELECT bloodgroup FROM blood WHERE user_id = $user_id";
                    $result = $this->db->query($selectQuery);
                    if ($result->num_rows()) {
                        $this->session->set_flashdata("error", "The User already set his Blood Group !");
                    } else {
                        $query = "INSERT INTO blood (user_id,bloodgroup,bloodgroupsign) VALUES('$user_id','$bloodgroup','$bloodgroupsign')";
                        $this->db->query($query);
                        
                        // Redirect to profile page
                        redirect('user/profile', 'refresh');
                        // redirect('UserDashboard/index')
                    }
                }
        }
        $this->load->view("blood");
    }
}

?>

