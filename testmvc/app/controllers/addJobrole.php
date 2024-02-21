<?php 

/**
 * home class
 */
class addJobrole
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

		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$jobs = new jobs;
			if($jobs->validate($_POST))
			{
				$jobs->insert($_POST);
				redirect('adminemployee');
			}

			$data['errors'] = $jobs->errors;			
		}

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('admin/addjobrole');
	}

}