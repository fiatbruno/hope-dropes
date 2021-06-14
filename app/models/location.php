//! AJAX
<!-- <?php  
   class location extends CI_Model {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      public function getDistricts($provinceId)  
      {  
          
          $this->db->from('districts'); 
          $this->db->where("provinceId", $provinceId); 
          $query = $this->db->get()->result();
          return $query;  
      }  
   }  
?>  -->