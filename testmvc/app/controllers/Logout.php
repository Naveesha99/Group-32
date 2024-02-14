<?php 

/**
 * logout class
 */
class Logout
{
	use Controller;

	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('login');
			exit();
		}
		
		if(!empty($_SESSION['USER']))
			unset($_SESSION['USER']);

		redirect('home');
	}

}
