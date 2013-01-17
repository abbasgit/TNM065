<?php
  class Reports extends CI_Controller{
    
    function index()
    {
      $this->load->model('reports_model');
      $data['result'] = $this->reports_model->getData();
      $data['page_title'] = "Money in the bank";
      $this->load->view('reports_view', $data);
      

      $this->load->library('form_validation');
      $this->form_validation->set_rules('household_id', 'household_id', 'required');
      $this->form_validation->set_rules('user_id', 'user_id', 'required');
      $this->form_validation->set_rules('price', 'price', 'required');
      $this->form_validation->set_rules('product', 'product', 'required');
      $this->form_validation->set_rules('category', 'category', 'required');
      $this->form_validation->set_rules('date', 'date', 'required');

   
        if ($this->form_validation->run() == TRUE)
        {
          $data = array(
          'report_id' => $this->input->post('report_id'),
          'household_id' => $this->input->post('household_id'),
          'user_id' => $this->input->post('user_id'),  
          'price' => $this->input->post('price'),  
          'product' => $this->input->post('product'),  
          'category' => $this->input->post('category'),  
          'date' => $this->input->post('date'),            
                               );                               

           $this->reports_model->insert_entry($data);    
          }
    }
}
?>