<?php  
   class Mailing extends CI_Model {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      public function select()  
      {  
         $query = $this->db->query("SELECT * from appointments a inner join users u on a.username = u.username");
         return $query;  
      }  
   }  
?> 
