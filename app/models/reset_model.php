<?php

class Reset_model extends CI_Model {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  

      public function upddata($data) {
        extract($data);
        $this->db->where('user_id', $user_id);
        $this->db->update($table_name, array('password' => $password));
        return true;
    }
   }

?>