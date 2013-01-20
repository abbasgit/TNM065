<?php

class Reports extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Reports_model', 'reports_model');
  }
    
  function index()
  {
    $this->form_validation->set_rules('price', 'price', 'required|greater_than[0]');
    $this->form_validation->set_rules('product', 'product', 'required');
    $this->form_validation->set_rules('category', 'category', 'required|is_natural|less_than[7]');
    $this->form_validation->set_rules('date', 'date', 'required');

    if ($this->form_validation->run() === TRUE)
    {

      $username = $this->session->userdata('username');

      // Get the user_id to be able to update the post in the database.
      $this->db->select('user_id');
      $this->db->from('USER');
      $this->db->where('username', $username);

      $user_id = $this->db->get()->row()->user_id;

      $data = array(
      'report_id' => $this->input->post('report_id'),
      'user_id' => $user_id,
      'price' => $this->input->post('price'),
      'product' => $this->input->post('product'),
      'category' => $this->input->post('category'),
      'date' => $this->input->post('date')
      );                               

      $this->reports_model->insert_entry($data);    
      echo '<p>Report sent successfully!</p>';
    }
    else
    {  
      
      $data['result'] = $this->reports_model->getData();
      $data['page_title'] = "Money in the bank";
      $this->load->view('reports_view', $data);
    }
  }
}

/* End of file reports.php */
/* Location: ./application/controllers/reports.php */