<?php
class request extends CI_Controller{
  public function index(){
    if(isset($_POST['request'])){
      $this->form_validation->set_rules('pickup','Pickup location','required');
      $this->form_validation->set_rules('destination','Destination','required');
      if($this->form_validation->run() == TRUE){
        $request = array(
        'username' => $_SESSION['username'],//$_SESSION['username'],
        'consignee_name' => $_POST['name-con'],
        'consignee-phone' => $_POST['phone-con'],
        'pickup_lat' => $_POST['lat-pickup'],
        'pickup_lng' => $_POST['lng-pickup']
        'dest_lat' => $_POST['lat-dropoff'],
        'dest_lng' => $_POST['lng-dropoff'],
        'date_and_time' => date("Y-m-d H:i:s"),
        'price_estimate' => '300',
        'response' => 'accepted',
        'rider_type' => $_POST['rider_type']
      );
      $this->load->model('Request_Model');
      $this->Request_Model->request($request);
      $this->session->set_flashdata("Success","Request succesfully recieved");
      redirect("../request","refresh");
    }
  }
    $this->load->view('user-home');
  }
}
?>
