<?php
class Hello_Model extends CI_Model{
    function saverecords($telephone,$email,$address,$bloodtype){
        $query="insert into bankUsers (telephone,email,address,bloodtype) values('$telephone','$email','$address','$bloodtype')";
        $this->db->query($query);
    }
}
?>