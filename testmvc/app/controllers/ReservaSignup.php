<?php

/**
 * signup class
 */
class ReservaSignup
{
	use Controller;

	public function index()
	{
		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if ($_POST['confirmPassword'] != $_POST['confirmPassword']) {
				$data['errors']['confirmPassword'] = 'Passwords do not match';
			} else {

				$reservationists = new Reservationists;
				$user = new User;
				$forReservationistTable = [
					'fullname' => $_POST['fullname'],
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'contactNumber' => $_POST['contactNumber'],
					'nic' => $_POST['nic'],
					'password' => $_POST['password'],
				];

				// $user->insert($_POST);
				// redirect('login');
				//echo '<script>console.log("Before inside if (POST request)");</script>';
				if ($reservationists->validate($_POST)) {
					$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$_POST['password'] = $hashedPassword;
					// $email= new SendMail;
					// $sendMail->sendEmployeeEmail($email, $name);
					$userData = [
						'fullname' => $_POST['fullname'],
						'username' => $_POST['username'],
						'email' => $_POST['email'],
						'password' => $hashedPassword,
						'user_type' => $_POST['empRoll'],
					];
					$user->insert($userData);
					$reservationists->insert($forReservationistTable);
					// redirect('reservaLogin');
					redirect('login');
				}

				$data['errors'] = $reservationists->errors;
			}
		}


		$this->view('reservaSignup', $data);
	}
}
