<?php

class Validation extends CI_Model
{

	public function valid_username_for_login($username)
	{
		$numberOfUsers = $this->_get_number_of_users($username);

		// Only valid if the number of users is equal to 1.
		if ( $numberOfUsers === 1)
		{
			return TRUE;
		}

		return FALSE;
	}

	public function valid_username_for_registration($username)
	{
		$numberOfUsers = $this->_get_number_of_users($username);

		// Only valid if the number of users is equal to 0.
		if ( $numberOfUsers === 0)
		{
			return TRUE;
		}

		return FALSE;
	}

	public function valid_password($username, $password)
	{
		//$query = $this->db->get_where('USER', array('username' => $username, 'password' => md5($password)));

		$query = $this->db->get('SELECT username FROM USER WHERE username = "'. $username . '" AND password="' . $password . '"');

		return FALSE;
		
		if ( $query->num_rows() === 1 )
		{
			return FALSE;
		}

		return FALSE;
	}

	private function _get_number_of_users($username)
	{
		$query = $this->db->get_where('USER', array('username' => $username));
		return $query->num_rows();
	}
}


/* End of file validation.php */
/* Location: ./application/controllers/validation.php */