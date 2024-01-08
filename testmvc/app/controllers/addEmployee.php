<?php 

/**
 * home class
 */
class addEmployee
{
	use Controller;

	public function index()
	{

		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$employee = new Employee;
			if($employee->validate($_POST))
			{
				$employee->insert($_POST);
				redirect('adminemployee');
			}

			$data['errors'] = $employee->errors;			
		}


		$jobs = new Jobs;
		$result = $this->jobRole($jobs);

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$data['role'] = $result;
		// show($data);
		$this->view('addemployee',$data);
	}

	// private function showJobs($jobs) {
	// 	$result = $jobs->findAll();
	// 	$data['jobs'] = $result;
	// 	$this->view('addemployee', $data);
	// }

	private function jobRole($jobs) {
		$result = $jobs->findAll();
		foreach ($result as $key ) {

			unset($key->time);
			unset($key->salary);
			unset($key->id);
			unset($key->jobSummary);

		}
		// show($result);
		return $result;
		// $data['jobs'] = $result;
		// $this->view('addemployee', $data);
	}
	

}