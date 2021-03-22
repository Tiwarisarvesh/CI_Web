<?php

class Loginmodel extends CI_Model{

    public function verify($username,$password)
    {
        $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('user');  
           
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  

    }
}


?>