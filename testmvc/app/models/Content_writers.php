<?php

/**
 * cw class
 */

class Content_writers
{
	use Model;

	protected $table = 'content_writers';

	protected $allowedColumns = [
		'id',
		'username',
		'email',
		'password',
		'contactNumber',
		'nic',

	];

	public function validate($data)
	{
		$this->errors = [];


		if (empty($data['username'])) {
			$this->errors['username'] = "username is required";
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


		if (empty($data['password'])) {
			$this->errors['password'] = "Password is required";
		} elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $data['password'])) {
			$this->errors['password'] = "Password must be 8 or more characters, and include at least one uppercase letter, one lowercase letter, one number, and one symbol";
		}

		// if($data['Repassword'] != $data['password'])
		// {
		// 	$this->errors['Repassword'] = "Check the Re-Entered password";
		// }

		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}
