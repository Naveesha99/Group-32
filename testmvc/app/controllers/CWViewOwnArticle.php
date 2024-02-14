<?php

/**
 *  view own article class
 */
class CWViewOwnArticle
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('contentwriter/cwViewOwnArticle');
	}
}
