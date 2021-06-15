<?php
class appoint extends CI_Controller{
    public function appointment($username,$date){
        $this->query("insert into appointments (username,date) values ($username,$date)");
    }
    
}
?>