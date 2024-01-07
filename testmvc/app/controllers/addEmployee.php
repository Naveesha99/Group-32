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

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('addemployee',$data);
	}

	private function showJobs($jobs) {
		$result = $jobs->findAll();
		$data['jobs'] = $result;
		$this->view('addemployee', $data);
	}
	

}