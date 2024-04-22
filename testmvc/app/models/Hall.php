<?php 


/**
 * User class
 */
class Hall
{
	
	use Model;

	protected $table = 'hall';

	protected $allowedColumns = [
		'id',
		'hallno',
		'amountOneHour',
		'amountSounds',
		'amountStandings',
		'headCount',
		'image',
		'content',
		'status'
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['hallno']))
		{
			$this->errors['hallno'] = "Hall Number is required";
		}
		if(empty($data['amountOneHour']))
		{
			$this->errors['amountOneHour'] = "Amount for One Hour is required";
		}
		if(empty($data['headCount']))
		{
			$this->errors['headCount'] = "headCount is required";
		}
		// if(empty($data['image']))
		// {
		// 	$this->errors['image'] = "Image is required";
		// }
		if(empty($data['content']))
		{
			$this->errors['content'] = "Content is required";
		}

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}