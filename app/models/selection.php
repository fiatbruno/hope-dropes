<?php

class selection extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getData(){
        return $this->db->query("select *from location l inner join users u on l.user_id= u.user_id;");
    }

}
?>