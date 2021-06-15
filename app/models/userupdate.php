<?php
class userupdate extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function updateuser($username,$email,$telephone,$gender,$password){
        return $this->db->query("update users set username='$username', email='$email', password='$password', gender='$password', telephone='$telephone'");
    }
}
?>