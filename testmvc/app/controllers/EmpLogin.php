<?php

// session_start(); // Start the session
/**
 * cw login class
 */
class EmpLogin
{
	use Controller;

	public function index()
	{
		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$emp = new Employee;
			$arr['empName'] = $_POST['username'];

			$row = $emp->first($arr);

			if ($row) {
				if ($row->password == $_POST['password']) {
					$_SESSION['USER'] = $row;
					redirect('employeeDashboard');
				}
			}

			$emp->errors['empName'] = "Wrong username or password";

			$data['errors'] = $emp->errors;
		}

		$this->view('employee/empLogin', $data);
	}
}
