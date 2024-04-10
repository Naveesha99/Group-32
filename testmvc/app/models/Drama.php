<?php


/**
 * User class
 */
class Drama
{

	use Model;

	protected $table = 'drama';

	protected $allowedColumns = [
		'id',
		'dramaName',
		'showingDate',
		'showingTime',
		'description',
		'coverPhoto',
	];

	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['dramaName'])) {
			$this->errors['dramaName'] = "Drama Name is required";
		}

		if (empty($data['showingDate'])) {
			$this->errors['showingDate'] = "Showing Dates are required";
		}

		if (empty($data['showingTime'])) {
			$this->errors['showingTime'] = "Showing Times are required";
		}

        if (empty($data['description'])) {
			$this->errors['description'] = "Description is required";
		}

        if (empty($data['showingTime'])) {
			$this->errors['showingTime'] = "Showing Times are required";
		}

		if (empty($data['coverPhoto'])) {
			$this->errors['coverPhoto'] = "Cover Photo is required";
		}

		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}
