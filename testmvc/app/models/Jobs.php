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

		if (empty($data['jobSummary'])) {
			$this->errors['jobSummary'] = "Job Summary is required";
		}

		if (empty($data['startTime'])) {
			$this->errors['startTime'] = "Start Time is required";
		}

		if (empty($data['endTime'])) {
			$this->errors['endTime'] = "End Time is required";
		}

		if (empty($data['salary'])) {
			$this->errors['salary'] = "Salary is required";
		}

		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}
