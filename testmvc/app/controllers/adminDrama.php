<?php 

/**
 * home class
 */
class adminDrama
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('admindrama');
	}

}