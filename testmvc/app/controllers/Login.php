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
			// $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
			// show($hashedPassword);

			$row = $user->first($arr);
			// show($row);
			if ($row) {
				if (password_verify($_POST['password'], $row->password)) {
					$_SESSION['USER'] = $row;
					if($row->isActive == 0)
					{
						if ($row->user_type == 'admin') {
							redirect('admindashboard');
						} elseif ($row->user_type == 'Front Desk Officer') {
							redirect('frontdesk');
						} elseif ($row->user_type == 'Content Writer') {
							redirect('cwDashboard');
						} elseif ($row->user_type == 'Employee') {
							redirect('employeeDashboard');
						} elseif ($row->user_type == 'Reservationist') {
							redirect('reservaHall');
							// redirect('admindashboard');
						}
					}
					else
					{
						$user->errors['email'] = "Your account is not active";
						$data['errors'] = $user->errors;
					}
				}

				$user->errors['email'] = "Wrong Email or Password";
				// $user->errors['password'] = "Wrong Password";

				$data['errors'] = $user->errors;
			}
		}
		$this->view('login', $data);
	}
}
