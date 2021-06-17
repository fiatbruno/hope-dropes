<?php  
   class Select extends CI_Controller  
   {  
      public function __construct(){
         parent::__construct();
         if ($_SESSION['user_logged'] == FALSE) {
               
               $this->session->set_flashdata("error", "Loggin' to access this page!");
               redirect("auth/login");
         }
         if ($_SESSION['admin'] == FALSE) {
            
            $this->session->set_flashdata("error", "You need Admin Permissions to access this page!");
            redirect("user/profile");
        }
        $this->load->library('pagination'); 
        $this->load->helper('url');
        
      }  
      public function index(){
         $this->load->model('display'); 
         $config['base_url'] = base_url() . "index.php/Select/index";        
         $config['total_rows'] = $this->display->get_count();       
         $config['per_page'] = 8;        
         $config['uri_segment'] = 3;        
         $config['num_links'] = 2;
         $config['use_page_numbers'] = TRUE;
         $config['reuse_query_string'] = TRUE;
         $config['full_tag_open'] = '<ul class="pagination justify-content-end" style="background-color:light;">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = 'First';
         $config['first_tag_open'] = '<div class="btn btn-outline-light text-danger">';
         $config['first_tag_close'] = '</div>';
         $config['last_link'] = 'Last';
         $config['last_tag_open'] = '<div class="btn btn-outline-light text-danger">';
         $config['last_tag_close'] = '</div>';
         $config['next_link'] = 'Next';
         $config['next_tag_open'] = '<div class="btn btn-outline-light text-danger">';
         $config['next_tag_close'] = '</div>';
         $config['prev_link'] = 'Prev';
         $config['prev_tag_open'] = '<div class="btn btn-outline-light text-danger">';
         $config['prev_tag_close'] = '</div>';
         $config['cur_tag_open'] = '<div class="btn btn-outline-light text-danger">';
         $config['cur_tag_close'] = '</div>';
         $config['num_tag_open'] = '<div class="btn btn-outline-light text-danger">';
         $config['num_tag_close'] = '</div>';
 
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
         $this->pagination->initialize($config);        
 
         $data['links'] = $this->pagination->create_links();        
 
         $data['user'] = $this->display->get_users($config["per_page"], $page);        
 
         $this->load->view('select',$data);    
 
     }
 
 }
?>