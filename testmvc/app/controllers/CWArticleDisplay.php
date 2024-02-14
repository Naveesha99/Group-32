<?php

/**
 * Display article class
 */
class CWArticleDisplay
{
	use Controller;
	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		// $this->view('cwArticleDisplay');
		$article = new article;
		$result = $article->findAll();
		$data = $result;

		$this->view('contentwriter/cwArticleDisplay', $data);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (isset($_POST['delete_article'])) {
				$articleId = $_POST['delete_article'];
				$this->articleDelete($articleId, $article);
			}

			if (isset($_POST['update_article'])) {
				unset($_POST['update_article']);
				$this->articleUpdate($_POST, $article);
			}

			if (isset($_POST['view_article'])) {
				$articleId = $_POST['view_article'];
				$this->articleView($articleId, $article);
			}
		}
	}

	// public function cwViewOwnArticle($articleId)
	// {
	// 	$article = new article;
	// 	$articleData = $article->where(['id' => $articleId]); // Assuming 'id' is the primary key column
	// 	$this->view('contentwriter/cwViewOwnArticle', $articleData);
	// }

	private function articleView($data, $article){
		
	}

	private function articleDelete($data, $article)
	{
		$article->delete($data, 'id');
		redirect("contentwriter/cwArticleDisplay");
	}

	private function articleUpdate($data, $article)
	{
		if (isset($data['id'])) {
			$id = $data['id'];
			unset($data['id']);
			$article->update($id, $data, 'id');
		}
	}
}
