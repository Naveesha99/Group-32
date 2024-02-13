<?php 

/**
 * home class
 */
class adminDashboard
{
	use Controller;

	public function index()
	{
		// Check if the user is logged in
		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('login');
			exit();
		}

		// Assuming you have a User model with a method to fetch user data
		// $userModel = new user(); // Replace with your actual User model
		// $user = $userModel->getUserByEmail($_SESSION['USER']->email);

		// $data['username'] = empty($user) ? 'User' : $user->email;

		$this->view('admin/admindashboard');
	}
}
