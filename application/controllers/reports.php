<?php

class Reports extends CI_Controller
{

  private $user_id;

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Reports_model', 'reports_model');
    $this->load->library('table');
    $this->_load_user_id();
  }
    
  public function index()
  {
    $this->form_validation->set_rules('price', 'price', 'required|greater_than[0]');
    $this->form_validation->set_rules('product', 'product', 'required');
    $this->form_validation->set_rules('category', 'category', 'required|is_natural|less_than[7]');
    $this->form_validation->set_rules('date', 'date', 'required');

    if ($this->form_validation->run() === TRUE)
    {

      $data = array(
      'report_id' => $this->input->post('report_id'),
      'user_id' => $this->user_id,
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
      $this->load->view('reports_view');
    }
  
    $data['query'] = $this->reports_model->get_report_query_for_user($this->user_id);
    $this->load->view('reports_table', $data);
  }

  private function _clear_post_variables()
  {
     unset($_POST);
  }

  private function _load_user_id()
  {

      $username = $this->session->userdata('username');

      // Get the user_id to be able to update the post in the database.
      $this->db->select('user_id');
      $this->db->from('USER');
      $this->db->where('username', $username);

      $this->user_id = $this->db->get()->row()->user_id;
  }

}

/* End of file reports.php */
/* Location: ./application/controllers/reports.php */