<?php 

/**
 * home class
 */
class employeeDashboardNew
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('employee/employeeDashboard');
	}

}