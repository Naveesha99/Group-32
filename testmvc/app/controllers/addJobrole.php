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

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$jobs = new jobs;
			if ($jobs->validate($_POST)) {
				$arr1['jobTitle'] = $_POST['jobTitle'];
				$result = $jobs->first($arr1);
				if ($result) {
					$data['errors']['added'] = "This job role is already added";
				} else {
					if ($_POST['startTime'] > $_POST['endTime']) {
						$data['errors']['before'] = 'Start time should be before end time';
					} else {
						if (!is_numeric($_POST['salary'])) {
							$data['errors']['string'] = 'Salary should be a numeric value';
						} elseif ($_POST['salary'] < 0) {
							$data['errors']['negative'] = 'Salary should be a positive value';
						} else {
							$jobs->insert($_POST);
							redirect('adminemployee');
						}
					}
				}
			} else {
				$data['errors'] = $jobs->errors;
			}
		}

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('admin/addjobrole', $data);
	}
}
