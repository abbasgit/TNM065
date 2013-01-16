<?php
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		// Load the validation model for validating input from the form.
		$this->load->model('Validation', 'validation');
	}

	public function index()
	{
		$this->_setup_form_validation();

		if ( $this->form_validation->run() === FALSE )
		{
			// If validation fails, the login view is reloaded.
			$this->load->view('login');
		}
		else
		{
			$this->_login_success();
		}
	}

	private function _login_success()
	{
		// Write session data
		$logindata = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
		$this->session->set_userdata($logindata);
		redirect('main_page');
	}

	private function _setup_form_validation()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|alpha_numeric|callback_check_username');
		$this->form_validation->set_rules('password', 'password', 'trim|required|alpha_numeric|callback_check_password');
	}

	public function check_username($username)
	{
		if ($this->validation->valid_username_for_login($username))
		{
			return TRUE;
		}
		
		$this->form_validation->set_message('check_username', 'The username, "' . $username . '", does not exist.');
		return FALSE;
	}

	public function check_password($password)
	{
		// Fetch the username 
		$username = $this->input->post('username');
		
		if ($this->validation->valid_password($username, $password))
		{
			return TRUE;
		}
		
		$this->form_validation->set_message('check_password', 'Incorrect password' . md5($password) . 'for user : ' . $username);
		return FALSE;
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */