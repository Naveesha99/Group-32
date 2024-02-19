<?php

/**
 * content writer dashboard class
 */
class CWDashboard
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
		$article = new article;
		$result = $article->findPublishArticles();
		$data = $result;

		$this->view('contentwriter/cwDashboard', $data);
	}
}
