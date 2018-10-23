<?php
   class home extends CI_Controller
   {
      public function index()
      {
         //load the database
         $this->load->database();
         //load the model
         $this->load->model('select');
         //load the method of model
         $data['h']=$this->select->select();
         //return the data in view
         $this->load->view('admin-users', $data);
      }
   }
?>
