<?php
class Login extends CI_Controller{
  public function index(){



    if(isset($_POST['log'])){
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run() == TRUE){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->load->model('Login_Model');
        if(login($username,$password)){
          redirect("../request","refresh");
        }else{
          $this->session->set_flashdata('error','The Account Details you entered do not exist');
        }
      }
    }
    $this->load->view('login');
  }
}
 ?>
