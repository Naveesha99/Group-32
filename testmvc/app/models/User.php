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
		'username',
		'email',
		'nic',
		'dob',
		'password',
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['fullname']))
		{
			$this->errors['fullname'] = "Full name is required";
		}

		if(empty($data['username']))
		{
			$this->errors['username'] = "Username is required";
		}

		if(empty($data['email']))
		{
			$this->errors['email'] = "Email is required";
		}else
		if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->errors['email'] = "Email is not valid";
		}

		if(empty($data['nic']))
		{
			$this->errors['nic'] = "NIC is required";
		}

		// if(empty($data['dob']))
		// {
		// 	$this->errors['dob'] = "Date of Birth is required";
		// }
		
		if (empty($data['password'])) {
			$this->errors['password'] = "Password is required";
		} elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $data['password'])) {
			$this->errors['password'] = "Password must be 8 or more characters, and include at least one uppercase letter, one lowercase letter, one number, and one symbol";
		}

		if($data['Repassword'] != $data['password'])
		{
			$this->errors['Repassword'] = "Check the Re-Entered password";
		}

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}