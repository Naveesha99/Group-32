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
		'date',
		'startTime',
		'endTime',
		'location',
		'count',
		'status',
	];
	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['taskType'])) {
			$this->errors['taskType'] = "Task type is required";
		}

		if (empty($data['date'])) {
			$this->errors['date'] = "Date is required";
		}

        if (empty($data['startTime'])) {
            $this->errors['startTime'] = "Start time is required";
        }

        if (empty($data['endTime'])) {
            $this->errors['endTime'] = "End time is required";
        }

        if (empty($data['location'])) {
            $this->errors['location'] = "Location is required";
        }


		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}
