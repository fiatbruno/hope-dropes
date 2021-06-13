<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Reset extends CI_Controller {
    function __construct() {
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
    }

	public function index()  
    {  
		$this->load->view('reset');  
	}
	
    public function send_mail(){

            $from_email = "fiatbruno96@gmail.com";
            $to_email = $_SESSION['email'];

        	//SMTP & mail configuration
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'fiatbruno96@gmail.com',
				'smtp_pass' => 'GirishyA10@',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1'
			);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");

			//Email content
			$htmlContent ="<html><body style='font-family: Poppins, sans-serif; color: #000;'>";
			$htmlContent .= "<h1>Password Reset</h1>";
			$htmlContent .= "<p>Hey,".$_SESSION['username'] ." </p>";
			$htmlContent .= "<p>Click on the button below to change your password</p>";
			$htmlContent .= "<p>If you don't know about us,simply ignore this.</p>";
            $htmlContent .="<a href='". base_url() ."reset/restin'>Reset password</a>";
            $htmlContent .= "</body></html>";

			$this->email->to($to_email);
			$this->email->from("$from_email", 'Hope Drops');
			$this->email->subject('Password Reset');
			$this->email->message($htmlContent);

            if ($this->email->send()) {
                $this->session->set_flashdata("success", " Check your inbox for the Reset Email");
            }
            else{
			    $this->session->set_flashdata("error", "Reset Email wasn't sent ! :(");
                // show_error($this->email->print_debugger());
            }			
        	$this->load->view('reset');
    }

	public function restin(){
		if (isset($_POST['reset'])) {
            
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
            
            if ($this->form_validation->run() == TRUE) {
                // echo "Form Validated";
                
                // Add User to Database

				$data = array(
					'table_name' => 'users',
					'user_id' => $_SESSION['user_id'],
					'password' => md5($this->input->post('password'))
				);
				 $this->load->model('reset_model'); // load the model first
				if($this->reset_model->upddata($data)) // call the method from the model
				{
					$this->session->set_flashdata("success", "Your account passworod was reset. You can login now");
                	redirect("auth/login", "refresh");
				}
				else
				{
					$this->session->set_flashdata("error", "Sorry, Couldn't reset you Password");
                	redirect("reset/index", "refresh");
				}
            }
            
        }
        
        // Load a View
        $this->load->view('resetin');
	}
}

?>