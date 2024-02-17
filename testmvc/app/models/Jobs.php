<?php


/**
 * User class
 */
class Jobs
{

	use Model;

	protected $table = 'jobs';

	protected $allowedColumns = [
		'id',
		'jobTitle',
		'jobSummary',
		'startTime',
		'endTime',
		'salary',
	];

	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['jobTitle'])) {
			$this->errors['jobTitle'] = "Employee Title is required";
		}

		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}
