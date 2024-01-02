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

		if(empty($data['dob']))
		{
			$this->errors['dob'] = "Date of Birth is required";
		}
		
		if(empty($data['password']))
		{
			$this->errors['password'] = "Password is required";
		}

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}