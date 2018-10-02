<?php
class Login extends CI_Controller{
  public function index(){
    if(isset($_POST['log'])){
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run() == TRUE){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->db->SELECT('*');
        $this->db->FROM('users');
        $this->db->WHERE(array('username' => $username, 'password' => $password));
        $result = $this->db->get();
        $numrow = $result->num_rows();
        if($numrow == 1){
          $this->session->set_flashdata('success','Log in was succesful');
          //set sessions
          $this->load->library('../controllers/request');
          //$obj = new $this->request();
          //$obj->index();
        }else{
          $this->session->set_flashdata('error','The Account Details you entered do not exist');
        }
      }
    }
    $this->load->view('login');
  }
}
 ?>
