<?php

/**
 * home class
 */
class editemployee
{
	use Controller;

	public function index()
	{


		$data = [];

		// Check if an employee ID is provided in the URL
		$employeeId = isset($_GET['id']) ? $_GET['id'] : null;
		$employee = new Employee;

		// echo $employeeId;
		// If an ID is provided, fetch the employee data
		if ($employeeId) {
			$arr1['id'] = $employeeId;

			// Use the where method to find the employee with the given ID
			$employeeData = $employee->where($arr1);
			// If the employee data is found, assign it to the $data array
			if ($employeeData) {
				$data['employee'] = $employeeData;
				// show($data);
			} else {
				// Handle the case when the employee data is not found
				// For example, redirect to an error page or show a message
				echo "Employee not found.";
				exit();
			}
		}

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$employee->update($employeeId, $_POST, 'id');
			redirect('employees');
		}

		//show($_POST);
				// show($data);
// 


		$this->view('admin/editemployee', $data);
	}
}
