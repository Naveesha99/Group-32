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

		if (empty($data['empName'])) {
			$this->errors['empName'] = "Employee name is required";
		}

		if (empty($data['empEmail'])) {
			$this->errors['empEmail'] = "Email is required";
		}elseif (!filter_var($data['empEmail'], FILTER_VALIDATE_EMAIL)) {
			$this->errors['empEmail'] = "Email is not valid";
		}


		if (empty($data['empNIC'])) {
			$this->errors['empNIC'] = "NIC is required";
		} elseif (!preg_match('/^\d{12}$|^\d{9}[xXvV]$/', $data['empNIC'])) {
			$this->errors['empNIC'] = "NIC must be either 12 digits or 9 digits with 'x' or 'v'";
		}

		if (empty($data['empDOB'])) {
			$this->errors['empDOB'] = "Date of Birth is required";
		} else {
			$currentDate = new DateTime();
			$inputDate = new DateTime($data['empDOB']);

			if ($inputDate > $currentDate) {
				$this->errors['empDOB'] = "Date of Birth must be in the past";
			}

			$age = $currentDate->diff($inputDate)->y;
			if ($age < 18) {
				$this->errors['empDOB'] = "Employee must be at least 18 years old";
			}
		}

		if (empty($data['empAddress'])) {
			$this->errors['empAddress'] = "Employee Address is required";
		}

		if (!empty($data['empContact']) && strlen($data['empContact']) !== 10) {
			$this->errors['empContact'] = "Employee Contact must be 10 digits";
		}

		if (!empty($data['empContact']) && !ctype_digit($data['empContact'])) {
			$this->errors['empContact'] = "Contact must contain only digits";
		}

		if (empty($data['empRoll'])) {
			$this->errors['empRoll'] = "Roll is required";
		}


		if (empty($this->errors)) {
			return true;
		}

		return false;
	}

	public function validateNew($data)
	{
		$this->errors = [];

		if (empty($data['empName'])) {
			$this->errors['empName'] = "Employee name is required";
		}

		if (empty($data['empEmail'])) {
			$this->errors['empEmail'] = "Email is required";
		}

		if (!filter_var($data['empEmail'], FILTER_VALIDATE_EMAIL)) {
			$this->errors['empEmail'] = "Email is not valid";
		}

		
		if (empty($data['empAddress'])) {
			$this->errors['empAddress'] = "Employee addres is required";
		}

		if (empty($data['empContact'])) {
			$this->errors['empContact'] = "Employee contact is required";
		}


		


		if (empty($this->errors)) {
			return true;
		}

		return false;
	}

}
