<?php  
   class Display extends CI_Model {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      public function select()  
      {  
         $query = $this->db->get('users');  
         return $query;  
      }
      public function get_count() 
      {
           return $this->db->count_all('users');
       }
   
       public function get_users($limit, $start) 
      {
           $this->db->limit($limit, $start);
           $query = $this->db->get('users');
           return $query->result();
       }
   }  
?> 
