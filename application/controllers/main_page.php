
<?php
class Main_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->_is_logged_in() )
		{
			redirect('login', 'refresh');
		}
	}
	
	public function index()
	{
		$this->_load_main_view();
	}

	public function ajax_request()
	{
		print 'ajax result goes here';
	}

	public function logout()
	{

		// Clears the current session.
		$this->session->sess_destroy();

		redirect('main_page', 'refresh');
	}

	private function _load_main_view()
	{
		$data = array('username' => $this->session->userdata('username'));
		$this->load->view('main_view', $data);
	}

	private function _is_logged_in()
	{
		if ($this->session->userdata('username') === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}

/* End of file main_page.php */
/* Location: ./application/controllers/main_page.php */