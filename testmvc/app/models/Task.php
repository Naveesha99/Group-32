<?php


/**
 * User class
 */
class Task
{

	use Model;

	protected $table = 'task';

	protected $allowedColumns = [
		'id',
		'taskType',
		'description',
		'employeeType',
	];
	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['taskType'])) {
			$this->errors['taskType'] = "Task type is required";
		}

		if (empty($data['description'])) {
			$this->errors['description'] = "Description is required";
		}

		if (empty($data['employeeType'])) {
			$this->errors['employeeType'] = "Employee type is required";
		}

		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}
