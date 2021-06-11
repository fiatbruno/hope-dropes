<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RespAdmin extends CI_Controller {
    function __construct() {
        parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
    }

    public function index(){
        $this->load->helper('form');
        $this->load->view('respondAdmin');
    }
    
    public function send_mail(){

            $from_email = $this->input->post('from_mail');
            $to_email = $this->input->post('to_mail');
            $message = $this->input->post('message');

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
			$htmlContent = "<h1>Doctor's response</h1>";
            $htmlContent.=$message;

			$this->email->to($to_email);
			$this->email->from($from_email, 'Hope blood');
			$this->email->subject("Doctor's Response");
			$this->email->message($htmlContent);

            if($this->email->send())
                $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
            else
                $this->session->set_flashdata("admin_sent", $htmlContent);
                // show_error($this->email->print_debugger());
                $this->load->view('respondAdmin');
    }
}

?>