<?php

class Budget extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Reports_model', 'reports_model');
	}

	public function index()
	{
		$this->load->view('budget');
	}
}

/* End of file budget.php */
/* Location: ./application/controllers/budget.php */