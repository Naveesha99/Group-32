<?php 

/**
 * home class
 */
class adminEmployee
{
	use Controller;

	public function index()
	{

		$employee = new Employee;
		$result = $employee->findAll();

		$data = $result;

		$this->view('adminemployee',$data);
	}

}