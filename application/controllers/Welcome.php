<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		// $this->load->url();
		$this->load->model('Hello_Model');
	}
		
		public function savedata()
			{
				$this->load->view('register');
				// check submit button
				if($this->input->post('save')){
					// $id=$this->input->post("id");
					// $firstname=$this->input->post("firstname");
					// $lastname=$this->input->post("lastname");
					$telephone=$this->input->post("telephone");
					$email=$this->input->post("email");
					$address=$this->input->post("city");
					$bloodtype=$this->input->post("bloodtype");

					$this->Hello_Model->saverecords($telephone,$email,$address,$bloodtype);
					// echo "records saved successfully";
				}
			}
		public function home2(){
			$this->load->view('home2');
		}
}

?>
