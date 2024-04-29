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
			redirect('login');
			exit();
		}


		$cwId = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;
		$data = [];
		$article = new Article;
		$draft = [];
		
		if ($cwId) {
			$arr1['cw_id'] = $cwId;
			$articleData = $article->where($arr1);
			if ($articleData) {

				$draft = array_filter($articleData, function ($article) {
					return $article->status == 0 ;
				});

            } 
		}
		$data['draft_articles'] = $draft;

		$this->view('contentwriter/cwDraft', $data);
	}
}
