<?php 


/**
 * User class
 */
class Employee
{
	
	use Model;

	protected $table = 'employee';

	protected $allowedColumns = [
		'id',
		'empName',
		'empEmail',
		'empNIC',
		'empDOB',
		'empAddress',
		'empContact',
        'empRoll',
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['empName']))
		{
			$this->errors['fullname'] = "Employee name is required";
		}

        if(!filter_var($data['empEmail'],FILTER_VALIDATE_EMAIL))
		{
			$this->errors['empEmail'] = "Email is not valid";
		}

		if(empty($data['empNIC']))
		{
			$this->errors['empNIC'] = "NIC is required";
		}else

		if(empty($data['empDOB']))
		{
			$this->errors['empDOB'] = "Date of Birth is required";
		}
		
        if(empty($data['empRoll']))
		{
			$this->errors['empRoll'] = "Employee Roll is required";
		}


		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}