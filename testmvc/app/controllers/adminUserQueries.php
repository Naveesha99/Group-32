<?php

/**
 * home class
 */
class adminUserQueries
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
		$userqueries = new Userqueries;
		$result['userqueries'] = $userqueries->findAll();
		$data['userqueries'] = $result['userqueries'];

		$this->view('admin/adminUserQueries', $data);
	}
	

}
