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
				redirect('employeetable');
			}

			$data['errors'] = $employee->errors;			
		}

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('addemployee');
	}

}