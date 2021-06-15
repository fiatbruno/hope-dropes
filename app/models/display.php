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
   }  
?> 
