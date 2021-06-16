<?php
class appoint extends CI_Model{
    public function appointment($username, $date){
        $this->db->query("insert into appointments (username,data) values ('$username','$date')");
    }
    
}
?>