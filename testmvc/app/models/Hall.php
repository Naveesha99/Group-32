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
			$this->errors['amountOneHour'] = "Amount is required";
		}else if(!is_numeric($data['amountOneHour']))
		{
			$this->errors['amountOneHour'] = "Amount should be numeric";
		}else if($data['amountOneHour'] < 0)
		{
			$this->errors['amountOneHour'] = "Amount should be greater than 0";
		}
		if(empty($data['headCount']))
		{
			$this->errors['headCount'] = "Head Count is required";
		}else if(!is_numeric($data['headCount']))
		{
			$this->errors['headCount'] = "Head Count should be numeric";
		}else if($data['headCount'] < 0)
		{
			$this->errors['headCount'] = "Head Count should be greater than 0";
		}
		if(empty($data['image']))
		{
			$this->errors['image'] = "Image is required";
		}
		if(empty($data['content']))
		{
			$this->errors['content'] = "Content is required";
		}

		if(empty($data['status']))
		{
			$this->errors['status'] = "Status is required";
		}

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}