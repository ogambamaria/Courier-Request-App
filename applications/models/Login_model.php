<?php
class Login_Model extends CI_Model{
  function login($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query=$this->db->get('users');
    if($query->num_rows()>0){
      return true;
    }else{
      return false;
    }
  }
  function gettype($username,$password){
    $query = $this->db->query("SELECT user_type FROM users WHERE username = '$username' AND password = '$password'");
    return $query->row()->user_type;
  }
}
 ?>
