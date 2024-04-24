<?php 


/**
 * User class
 */
class HallFacilities
{
	
	use Model;

	protected $table = 'hallfacilities';

	protected $allowedColumns = [
		'id',
		'hallno',
		'facility',
		'status'
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['hallname']))
		{
			$this->errors['hallname'] = "hallname is required";
		}
		if(empty($data['facilityid']))
		{
			$this->errors['facility'] = "facility is required";
		}
		

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}


	public function deleteByHallNo($hallno, $hallno_column = 'hallno')
	{
		$data = [$hallno_column => $hallno];
		$query = "DELETE FROM $this->table WHERE $hallno_column = :$hallno_column";
		$this->query($query, $data);
		return false;
	}

}