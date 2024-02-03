<?php

/**
 *  content writer profile
 */
class CWProfile
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('cwProfile');
	}
}
