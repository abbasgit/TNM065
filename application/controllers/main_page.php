
<?php
class Main_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if ( ! $this->_is_logged_in() )
		{
			redirect('login', 'refresh');
		}
		else
		{
			$this->_load_main_view();
		}
	}

	private function _load_main_view()
	{
		$this->load->view('main_view');
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

	public function logout()
	{

		//Clears the current session.
		$this->session->sess_destroy();

		redirect('main_page', 'refresh');
	}
}

/* End of file main_page.php */
/* Location: ./application/controllers/main_page.php */