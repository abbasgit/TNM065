<?php
class Home_controller extends CI_Controller {

	public function index()
	{
		// Route to correct page.
		print_r($this->session->userdata);
		echo '<br>';

		$logindata = $this->session->userdata('logindata');

		if ($logindata === FALSE)
		{
			redirect('login', 'refresh');
		}
		else
		{
			redirect('main_page', 'refresh');
		}
	}
}

/* End of file home_controller.php */
/* Location: ./application/controllers/home_controller.php */