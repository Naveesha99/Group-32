<?php

/**
 *  view own article class
 */
class CWDraft
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
		$data =[];
		$article = new Article;
		$data['draft_articles'] = $article ->getDraftArticles();

		$this->view('contentwriter/cwDraft', $data);
	}
}
