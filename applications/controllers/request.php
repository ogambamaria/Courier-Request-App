<?php
class request extends CI_Controller{
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
          $this->home();
        }else{
          $this->session->set_flashdata('error','The Account Details you entered do not exist');
          $this->load->view('login');
        }
      }
    }
  }
  public function home(){
    if(isset($_POST['request'])){
      $this->form_validation->set_rules('pickup','Pickup location','required');
      $this->form_validation->set_rules('destination','Destination','required');
      if($this->form_validation->run() == TRUE){
        $data = array(
        'username' => 'Ian',//$_SESSION['username'],
        'pickup' => $_POST['pickup'],
        'destination' => $_POST['destination'],
        'rider_type' => $_POST['rider_type']
      );
      $this->db->insert("requests",$data);
      $this->session->set_flashdata("Success","Request succesfully recieved");
      redirect("request","refresh");
    }
  }
    $this->load->view('user-home');
  }
}
?>
