<?php


/**
 * User class
 */
class User
{

	use Model;

	protected $table = 'users';

	protected $allowedColumns = [
		'id',
		'fullname',
		'email',
		'nic',
		'dob',
		'password',
		'user_type',
		'isActive',
	];

	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['fullname'])) {
			$this->errors['fullname'] = "Full name is required";
		}

		if (empty($data['email'])) {
			$this->errors['email'] = "Email is required";
		} else
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$this->errors['email'] = "Email is not valid";
		}

		if (empty($data['nic'])) {
			$this->errors['nic'] = "NIC is required";
		} elseif (!preg_match('/^\d{12}$|^\d{9}[xXvV]$/', $data['nic'])) {
			$this->errors['nic'] = "NIC must be either 12 digits or 9 digits with 'x' or 'v'";
		}

		if (empty($data['dob'])) {
			$this->errors['dob'] = "Date of Birth is required";
		} else {
			$currentDate = new DateTime();
			$inputDate = new DateTime($data['dob']);

			if ($inputDate > $currentDate) {
				$this->errors['dob'] = "Date of Birth must be in the past";
			}

			$age = $currentDate->diff($inputDate)->y;
			if ($age < 18) {
				$this->errors['dob'] = "Employee must be at least 18 years old";
			}
		}

		if (empty($data['password'])) {
			$this->errors['password'] = "Password is required";
		} elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $data['password'])) {
			$this->errors['password'] = "Password must be 8 or more characters, and include at least one uppercase letter, one lowercase letter, one number, and one symbol";
		}

		if (empty($this->errors)) {
			return true;
		}

		return false;
	}

	public function validateUser($data)
	{
		$this->errors = [];

		if (empty($data['fullname'])) {
			$this->errors['fullname'] = "Full name is required";
		}

		if (empty($data['email'])) {
			$this->errors['email'] = "Email is required";
		} else
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$this->errors['email'] = "Email is not valid";
		}

		if (empty($this->errors)) {
			return true;
		}

		return false;
	}


}
