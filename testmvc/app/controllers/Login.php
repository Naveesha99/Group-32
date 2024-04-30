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
			if (!$_POST['email'] || !$_POST['password']) {
				$data['errors']['empty'] = 'Please fill all the fields';
			} else {
				$row = $user->first($arr);
				// show($row);
				if ($row) {
					if (password_verify($_POST['password'], $row->password)) {
						$_SESSION['USER'] = $row;
						if ($row->isActive == 0) {
							if ($row->user_type == 'admin') {
								redirect('admindashboard');
							} elseif ($row->user_type == 'Front Desk Officer') {
								redirect('front_desk');
							} elseif ($row->user_type == 'Content Writer') {
								redirect('cwDashboard');
							} elseif ($row->user_type == 'Employee') {
								redirect('employeeDashboard');
							} elseif ($row->user_type == 'reservationist') {
								redirect('reservaHall');
								// redirect('admindashboard');
							}
						} else {
							$data['errors']['active'] = 'Your account is not active';
						}
					} else {
						$data['errors']['password'] = 'Password is incorrect';
					}
				} else {
					$data['errors']['email'] = 'Email is incorrect';
				}
			}
		}
		$this->view('login', $data);
	}
}
