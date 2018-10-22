<?php
class Request_model extends CI_Model{
  function request($data){
    $this->db->insert('user_requests',$data);
  }
}
 ?>
