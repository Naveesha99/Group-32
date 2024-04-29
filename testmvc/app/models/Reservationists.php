<?php


/**
 * Reservationists class
 */
class Reservationists
{

	use Model;

	protected $table = 'reservationists';

	protected $allowedColumns = [
		'id',
		'fullname',
		'username',
		'email',
		'contactNumber',
		'nic',
		'password',
		'date',
		'images'
	];

	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['fullname'])) {
			$this->errors['fullname'] = "Full name is required";
		}


		if (empty($data['username'])) {
			$this->errors['username'] = "Username is required";
		}


		if (empty($data['email'])) {
			$this->errors['email'] = "Email is required";
		} else
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$this->errors['email'] = "Email is not valid";
		}


		if (empty($data['contactNumber'])) {
			$this->errors['contactNumber'] = "contactNumber is required";
		} else
		if (!filter_var($data['contactNumber'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]{10}$/")))) {
			$this->errors['contactNumber'] = "contactNumber is not valid";
		}


		if (empty($data['nic'])) {
			$this->errors['nic'] = "NIC is required";
		} elseif (!preg_match('/^\d{12}$|^\d{9}[xXvV]$/', $data['nic'])) {
			$this->errors['nic'] = "NIC must be either 12 digits or 9 digits with 'x' or 'v'";
		}

		if (empty($data['password'])) {
			$this->errors['password'] = "Password is required";
		} elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $data['password'])) {
			$this->errors['password'] = "Password must be 8 or more characters, and include at least one uppercase letter, one lowercase letter, one number, and one symbol";
		}


		if (empty($data['confirmPassword'])) {
			$this->errors['confirmPassword'] = " Confirm Password is required";
		} else
        if ($data['confirmPassword'] !== $data['password']) {
			$this->errors['confirmPassword'] = "Passwords do not match";
		}


		if (empty($this->errors)) {
			return true;
		}

		return false;
		// return true;
	}
}
