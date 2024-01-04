<?php 

/**
 * home class
 */
class employees
{
	use Controller;

	public function index()
	{

		$employee = new employee;
		$result = $employee->findAll();

		$data = $result;

		$this->view('employees',$data);
	}

}