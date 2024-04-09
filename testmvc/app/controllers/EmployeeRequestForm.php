<?php

/**
 *  employee requests form
 */
class EmployeeRequestForm
{
	use Controller;

	public function index()
	{
		// if (empty($_SESSION['USER'])) {
		// 	// Redirect or handle the case when the user is not logged in
		// 	// For example, you might want to redirect them to the login page
		// 	redirect('cwLogin');
		// 	exit();
		// }

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$data =[];
		$emp_req = new EmpRequest;

		if (isset($_POST['submit'])){
			$_POST['state'] ='pending';
			if($emp_req->validate($_POST)){
				$emp_req->insert($_POST);
				redirect('employeeReq');
			}
		}

		$data['errors'] = $emp_req->errors;
        // show($_POST);


		$this->view('employee/employeeRequestForm',$data);
	}
}
