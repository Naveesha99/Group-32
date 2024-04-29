<?php

/**
 *  employee requests form
 */
class EmployeeRequestForm
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

		// $name = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->empname;
		$userid = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;

		// echo $name;
		// echo $userid;

		$data = [];
		$emp_req = new EmpRequest;
		// $emp = new Employee;





		if (isset($_POST['submit'])) {
			$_POST['state'] = 'pending';
			$_POST['emp_id'] = $userid;
			if ($emp_req->validate($_POST)) {
				// show($_POST);

				// $sendMail = new SendMail;
				// $sendMail->employeeRequest($email, $name);
				$emp_req->insert($_POST);

				redirect('employeeReq');
			}
		}

		$data['errors'] = $emp_req->errors;
		// show($_POST);

		if ($_SESSION['USER']->user_type == 'Employee') {
			$this->view('employee/employeeRequestForm', $data);
		}
	}
}
