<?php 


/**
 * User class
 */
class Hall
{
	
	use Model;

	protected $table = 'hall';

	protected $allowedColumns = [
		'hallId',
		'hallno',
		'amountOneHour',
		'amountSounds',
		'amountStandings',
		'headCount',
	];

	public function validate($data)
	{
		$this->errors = [];

		// if(empty($data['jobTitle']))
		// {
		// 	$this->errors['jobTitle'] = "Employee Title is required";
		// }

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}