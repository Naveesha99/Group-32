<?php 

/**
 * home class
 */
class adminEmployee
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('adminemployee',);
	}

}