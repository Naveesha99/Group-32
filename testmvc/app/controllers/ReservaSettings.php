<?php 


class ReservaSettings
{
	use Controller;

	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('reservalogin');
			exit();
		}

		$data = [];
		$this->view('reservaSettings',$data);
	}

}
