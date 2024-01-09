<?php 

/**
 *  view own article class
 */
class CWDrafts
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('cwDrafts');
	}

}