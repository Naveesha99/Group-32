<?php 

/**
 * home class
 */
class addEmployee
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('addemployee');
	}

}