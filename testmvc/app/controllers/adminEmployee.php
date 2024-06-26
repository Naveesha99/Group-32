<?php

/**
 * home class
 */
class adminEmployee
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
			$employee = new Employee;
			if ($employee->validate($_POST)) {
				$employee->insert($_POST);
				// redirect('adminemployee');
			}

			$data['errors'] = $employee->errors;
		}

		//pass employee details to FE
		$employee = new Employee;
		$result['employee'] = $employee->findAll();
		$data['employee'] = $result['employee'];

		//pass job roles to FE
		$jobs = new Jobs;
		$result['role'] = $jobs->findall();
		$data['role'] = $result['role'];

		$tasks = new Task;
		$result['task'] = $tasks->findAll();
		$data['task'] = $result['task'];
		// show($_SESSION['USER']['user_type']);
		if($_SESSION['USER']->user_type == 'admin'){
		$this->view('admin/adminemployee', $data);
		}
	}
	
	// private function jobRole($jobs) {
	// 	$result['role'] = $jobs->findAll();
	// 	foreach ($result['role'] as $key ) {

	// 		unset($key->startTime);
	// 		unset($key->endTime);
	// 		unset($key->salary);
	// 		unset($key->id);
	// 		unset($key->jobSummary);

	// 	}
	// 	// show($result);
	// 	return $result['role'];
	// 	// $data['jobs'] = $result;
	// 	// $this->view('addemployee', $data);
	// }


}
