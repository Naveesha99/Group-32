<?php

/**
 *  cw drama portal
 */
class CWDramaPortal
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$article = new article;
		$result = $article->findAll();
		$data = $result;


		$this->view('contentwriter/cwDramaPortal', $data);
	}
}
