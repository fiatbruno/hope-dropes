<?php  
   class Mailing extends CI_Model {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      public function select()  
      {  
         $query = $this->db->query("SELECT username,email,create_date FROM blood b INNER JOIN users u ON b.user_id=u.user_id");
         return $query;  
      }  
   }  
?> 
