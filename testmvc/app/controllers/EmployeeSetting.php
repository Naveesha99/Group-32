<?php

/**
 *  employee profile
 */
class EmployeeSetting
{
	use Controller;

	public function index()
	{
		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('cwLogin');
			exit();
		}

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$emp = new Content_writers;
		$result = $emp->findAll();

		$data['content_writer'] = $result;

		$this->view('employee/employeeSetting', $data);
	}
}
