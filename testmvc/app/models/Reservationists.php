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


        if(empty($data['contactNumber']))
		{
			$this->errors['contactNumber'] = "contactNumber is required";
		}
		else
		if(!filter_var($data['contactNumber'],FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]{10}$/"))))
		{
			$this->errors['contactNumber'] = "contactNumber is not valid";
		}


		if(empty($data['nic']))
		{
			$this->errors['nic'] = "NIC is required";
		}
		
		
		if(empty($data['password']))
		{
			$this->errors['password'] = "Password is required";
		}


        if(empty($data['confirmPassword']))
		{
			$this->errors['confirmPassword'] = "Password is required";
		}else
        if($data['confirmPassword'] !== $data['password']){
            show('abc');
			$this->errors['confirmPassword'] = "Passwords do not match";
        }


		if(empty($this->errors))
		{
			return true;
		}

		return false;
		// return true;
	}
}