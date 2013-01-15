<?php
  class Reports extends CI_Controller{
    function index()
    {
      $this->load->model('reports_model');
      $data['result'] = $this->reports_model->getData($reports);
      $data['page_title'] = "Money in the bank";
      $this->load->view('reports_view',$data);
      }
  }
?>