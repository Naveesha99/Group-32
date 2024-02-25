<?php

/**
 * Display article class
 */
class CWArticleDisplay
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


		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		// $this->view('cwArticleDisplay');
		$article = new article;
		$result = $article->findPublishArticles();
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

			if (isset($_POST['view'])) {
				$articleId = $_POST['view'];
				$this->articleView($articleId, $article);
			}
		}
	}


	private function articleView($data, $article)
	{
		$articleData = $article->findArtcleById($data);

		if ($articleData) {
			$this->view('contentwriter/cwViewOwnArticle', $articleData);
		} else {

			echo "Article not found!";
		}
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
