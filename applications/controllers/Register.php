<?php
class Register extends CI_Controller{
  public function index(){
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
        'user_type' => 'User'
      );
      $this->load->model('Register_Model');
      $this->Register_Model->register($data);
      redirect("../request","refresh");
    }
  }
    $this->load->view('sign-up');
  }
  public function rider(){
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
        'user_type' => 'rider'
      );
      $this->load->model('Register_Model');
      $this->Register_Model->register($data);
      redirect("Login","refresh");
    }
  }
    $this->load->view('SignUpRider.html');
  }
}
?>
