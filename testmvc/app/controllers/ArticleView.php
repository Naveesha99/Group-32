<?php

/**
 *  view own article class
 */
class ArticleView
{
	use Controller;

	public function index()
	{
		
		$data = [];

		$articleId = isset($_GET['id']) ? $_GET['id'] : null;

		// echo $articleId;

		if ($articleId) {
			$article = new Article;
			$arr1['id'] = $articleId;

			$articleData = $article->where($arr1);

			if ($articleData) {
				$data['article'] = $articleData;
				//show($data);
			} else {
				echo "article not found";
				exit();
			}
		}

        // show($data['article']);

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('user/articleView', $data);
	}

	
}
