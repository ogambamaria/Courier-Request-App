<?php
class Auth extends CI_Controller{
  public function login(){
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
          $_SESSION['userid'] = "";//set sessions
          $this->load->view('UI/home.html');
        }else{
          $this->session->set_flashdata('error','The Account Details you entered do not exist');
          //redirect("Auth/login","refresh");
        }

    }
  }
    $this->load->view('login');
}
  public function register(){
    if(isset($_POST['register'])){
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('email','Email','required');
      $this->form_validation->set_rules('password','Password','required|min_length[5]');
      $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
      if($this->form_validation->run() == TRUE){
        $data = array(
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'gender' => $_POST['gender'],
        'date' => date('dd/mm/yyyy'),
        'phone' => $_POST['phone'],
      );
      $this->db->insert("users",$data);
      $this->session->set_flashdata("Success","Account Registered Succesfully. Please login");
      redirect("Auth/login","refresh");
    }
  }
    $this->load->view('sign_up');
  }
}
 ?>
