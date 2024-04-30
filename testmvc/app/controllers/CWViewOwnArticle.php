<?php
// defined('ROOTPATH') OR exit('Access Denied!');
/**
 *  view own article class
 */
class CWViewOwnArticle
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

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
		if ($_SESSION['USER']->user_type == 'Content Writer') {
			$this->view('contentwriter/cwViewOwnArticle', $data);
		}
	}

	public function editArticle()
	{
		header("Location:" . ROOT . "/cwEditArticle?id=" . $_GET['id']);
		exit();
	}

	public function deleteArticle()
	{
		$articleId = isset($_GET['id']) ? $_GET['id'] : null;
		if ($articleId) {
			$article = new Article;
			$result = $article->delete($articleId, 'id');
			if ($result) {
				header("Location :" . ROOT . "/contentwriter/cwArticleDisplay");
				exit();
			} else {
				echo "Failed to delete the article";
				exit();
			}
		}
	}
}
