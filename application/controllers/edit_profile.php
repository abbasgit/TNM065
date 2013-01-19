<?php

class Edit_profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// Load the validation model for validating input from the form.
		$this->load->model('Validation', 'validation');

	}

	public function index()
	{
		$this->form_validation->set_rules('currentpassword', 'currentpassword', 'trim|required|callback_check_password');
		$this->form_validation->set_rules('newpassword', 'password', 'trim|required');
		$this->form_validation->set_rules('confpassword', 'password confirmation', 'required|matches[newpassword]');

		if ( $this->form_validation->run() === FALSE )
		{
			$this->load->view('change_password');
		}
		else
		{
			// Update the password in the database 
			$username = $this->session->userdata('username');
			$password = $this->input->post('newpassword');
			$password = md5($password);

			$data = array(
				'password' => $password
				);
			
			$this->db->select('user_id');
			$this->db->from('USER');
			$this->db->where('username', $username);
			
			$user_id = $this->db->get()->row()->user_id;

			$this->db->where('user_id', $user_id);
			$this->db->update('USER', $data);
			print '<p>Your password has been changed successfully!</p>';
		}
		
	}

	public function check_password($password)
	{
		// Fetch the username 
		$username = $this->session->userdata('username');
		
		if ($this->validation->valid_login($username, $password))
		{
			return TRUE;
		}
		
		$this->form_validation->set_message('check_password', 'Incorrect password');
		return FALSE;
	}

}


/* End of file change_password.php */
/* Location: ./application/controllers/change_password.php */