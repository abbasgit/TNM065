<?php

class Validation extends CI_Model
{

	public function valid_username_for_login($username)
	{
		$numberOfUsers = $this->_get_number_of_users_with_username($username);

		// Only valid if the number of users is equal to 1.
		if ( $numberOfUsers === 1)
		{
			return TRUE;
		}

		return FALSE;
	}

	public function valid_username_for_registration($username)
	{
		$numberOfUsers = $this->_get_number_of_users_with_username($username);

		// Only valid if the number of users is equal to 0.
		if ( $numberOfUsers === 0)
		{
			return TRUE;
		}

		return FALSE;
	}

	public function valid_login($username, $password)
	{
		$query = $this->db->get_where('USER', array('username' => $username, 'password' => md5($password)));

		if ( $query->num_rows() === 1 )
		{
			return TRUE;
		}

		return FALSE;
	}

	private function _get_number_of_users_with_username($username)
	{
		$query = $this->db->get_where('USER', array('username' => $username));
		return $query->num_rows();
	}
}


/* End of file validation.php */
/* Location: ./application/controllers/validation.php */