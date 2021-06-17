<?php
  class Home extends CI_Model {  
    function __construct()  
    {  
       // Call the Model constructor  
       parent::__construct();  
    }  
    public function countAplus()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='A' and bloodgroupsign='+' ");
        return $query->num_rows();
    }  
    public function countAneg()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='A' and bloodgroupsign='-' ");
        return $query->num_rows();
    }  
    public function countBplus()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='B' and bloodgroupsign='+' ");
        return $query->num_rows();
    }  
    public function countBneg()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='B' and bloodgroupsign='-' ");
        return $query->num_rows();
    }  
    public function countABplus()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='AB' and bloodgroupsign='+' ");
        return $query->num_rows();
    }  
    public function countABneg()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='AB' and bloodgroupsign='-' ");
        return $query->num_rows();
    }  
    public function countOplus()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='O' and bloodgroupsign='+' ");
        return $query->num_rows();
    }  
    public function countOneg()  
    {  
        $query = $this->db->query("SELECT * FROM blood WHERE bloodgroup='O' and bloodgroupsign='-' ");
        return $query->num_rows();
    }  
}
?>