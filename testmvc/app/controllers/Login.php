<?php

/**
 * login class
 */
class Login
{
	use Controller;

	public function index()
	{
		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$user = new User;
			$arr['email'] = $_POST['email'];

			$row = $user->first($arr);
			// show($row);
			if ($row) {
				if ($row->password === $_POST['password']) {
					$_SESSION['USER'] = $row;
					if ($row->user_type == 'admin') {
						redirect('admindashboard');
					}elseif($row->user_type == 'Front Desk Officer'){
						redirect('frontdesk');
					}elseif($row->user_type == 'Content Writer'){
						redirect('cwDashboard');
					}elseif($row->user_type == 'Employee'){
						redirect('employeeDashboard');
					}
					// redirect('admindashboard');
				}
			}

			$user->errors['username'] = "Wrong username or password";

			$data['errors'] = $user->errors;
		}

		$this->view('login', $data);
	}
}
