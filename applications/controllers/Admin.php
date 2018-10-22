<?php
class Admin extends CI_Controller{
  public function index(){
    $this->load->view('admin-home');
  }
  public function couriers(){
    $this->load->view('admin-couriers');
  }
  public function users(){
    $this->load->view('admin-users');
  }
  public function reports(){
    $this->load->view('admin-reports');
  }
  public function profile(){
    $this->load->view('user-profile');
  }
}
?>
