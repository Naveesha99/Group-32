<?php

/**
 *  view own article class
 */
class CWDraft
{
	use Controller;

	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('cwLogin');
			exit();
		}


		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
		$data = [];
		$article = new Article;
		$data['draft_articles'] = $article->getDraftArticles();

		$this->view('contentwriter/cwDraft', $data);
	}
}
