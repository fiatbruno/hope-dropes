<?php
class Mail extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            
            $this->session->set_flashdata("error", "Loggin' to access this page!");
            redirect("auth/login");
        }
        if ($_SESSION['admin'] == FALSE) {
            
            $this->session->set_flashdata("error", "You need Admin Permissions to access this page!");
            redirect("user/profile");
        }
    }

    public function index()  
    {  
       $this->load->database();  
       $this->load->model('mailing');  
        $data['h']=$this->mailing->select();  
       $this->load->view('mail', $data);  
    }  

    function sendMail(){
        $id = $_GET['id'];
        echo $id;
        $query = $this->db->query("SELECT * from appointments a inner join users u on a.username = u.username where appointId='$id'");
        $ans = $query->result();
        $to_email = $ans[0]->email;
    // echo $ans->email;
        
        // foreach($ans as $val){
        //     var_dump($ans->email);
        // }

            $subject = "Please note Your Appointment Date";
            $message = "
                <html>
                <body style='font-family: Poppins, sans-serif; color: #000;'>
                <h1> Hi  ".$_SESSION['username']." !</h1>
                <p>
                This is an email from Hope Drops about the donation you applied for. 
                For complete Information about our working process, click to login <a href='". base_url() ."auth/login'>Here</a>. 
                We just wanted to remind you that you have appointment on the <b>19/07/2021</b>.
                </p>
                </body>
                </html>";

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from("fiatbruno96@gmail.com", "Hope Drops");
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send()){
                $this->session->set_flashdata("success", " You will soon get an Email about the Appointment! :)");
                redirect("Mail/index");
            }else {
                $this->session->set_flashdata("error", " Sorry! Can't schedule your Appointment! :(");
                redirect("Mail/index");
            }
    }
}
