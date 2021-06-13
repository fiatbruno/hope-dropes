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

                        $subject = "Please note Your Appointment Date";
                        $message = "
                            <html>
                            <body style='font-family: Poppins, sans-serif; color: #000;'>
                            <h1> Hi  ".$_SESSION['username']." </h1>
                            <p>
                            This is an email from Hope Drops about the donation you applied for. 
                            For complete Information about our working process, click <a href='#'>Here</a>. 
                            Your appointment will be on the <b>19/07/2021</b>.
                            </p>
                            </body>
                            </html>";

                        $this->load->library('email');
                        $config['mailtype'] = 'html';
                        $this->email->initialize($config);
                        $this->email->from("fiatbruno96@gmail.com");
                        $this->email->to($_SESSION['email']);
                        $this->email->subject($subject);
                        $this->email->message($message);

                        if($this->email->send()){
                            $this->session->set_flashdata("success", " You will soon get an Email about the Appointment! :)");
                        }else {
                            $this->session->set_flashdata("error", " Sorry! Can't schedule your Appointment! :(");
                            
                            // * From debbugin in case of errors
                            // * echo $this->email->print_debugger();
                            // * var_dump($this->email->send());
                        }
                        
                        // Redirect to profile page
                        redirect('user/profile', 'refresh');
                    }
                }
        }
        $this->load->view("blood");
    }
}


?>