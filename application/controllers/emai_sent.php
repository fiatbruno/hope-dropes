<?php

defined('BASEPATH') or exit('No direct script access allowed');

class emai_sent extends CI_Controller {
    function __construct() {
        parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
    }

    public function index(){
        $this->load->helper('form');
        $this->load->view('email_sent');
    }
    
    public function send_mail(){

            $from_email = "eumuhoza83@gmail.com";
            $to_email = $this->input->post('email');

        	//SMTP & mail configuration
			$this->load->library('email');
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'eumuhoza83@gmail.com',
				'smtp_pass' => 'sawasawa04!',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1'
			);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");

			//Email content
			$htmlContent = '<h1>Password Reset</h1>';
			$htmlContent .= '<p>Click on the button below to change your password</p>';
			$htmlContent .= "<p>If you don't know about us,simply ignore this.</p>";
            $htmlContent .="<a href='http://[::1]/Dblood/index.php/emai_sent/send_mail'>Reset password</a>";

			$this->email->to($to_email);
			$this->email->from("eumuhoza83@gmail.com", 'Hope blood');
			$this->email->subject('Password Reset');
			$this->email->message($htmlContent);

            if($this->email->send())
                // $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
				$this->session->set_flashdata("email_sent", $htmlContent);
            else
                $this->session->set_flashdata("email_sent", $to_email);
                // show_error($this->email->print_debugger());
				// $this->load->view('email_sent');
                $this->load->view('received');
    }
}

?>