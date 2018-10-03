<?php
class request extends CI_Controller{
  public function index(){
    if(isset($_POST['request'])){
      $this->form_validation->set_rules('pickup','Pickup location','required');
      $this->form_validation->set_rules('destination','Destination','required');
      if($this->form_validation->run() == TRUE){
        $request = array(
        'username' => 'Ian',//$_SESSION['username'],
        'pickup' => $_POST['pickup'],
        'destination' => $_POST['destination'],
        'rider_type' => $_POST['rider_type']
      );
      $this->db->insert("user_requests",$request);
      $this->session->set_flashdata("Success","Request succesfully recieved");
      redirect("../request","refresh");
    }
  }
    $this->load->view('user-home');
  }
}
?>
