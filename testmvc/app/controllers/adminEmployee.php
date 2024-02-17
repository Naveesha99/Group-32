<?php

/**
 * home class
 */
class adminEmployee
{
	use Controller;

	public function index()
	{

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

		$this->view('admin/adminemployee', $data);
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
