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
	}

	public function cwViewOwnArticle($articleId)
	{
		$article = new article;
		$articleData = $article->where(['id' => $articleId]); // Assuming 'id' is the primary key column
		$this->view('contentwriter/cwViewOwnArticle', $articleData);
	}

	public function delete()
	{
		if (isset($_POST['id'])) {
			$articleId = $_POST['id'];
			$article = new article;
			$article->delete($articleId);
			redirect("contentwriter/cwArticleDisplay");
		}
	}


	// 	$article = new article;
	// 	$result = $article->findAll();
	// 	$data = $result;

	// 	$this->view('cwArticleDisplay', $data);

	// 	if (isset($_POST['id'])) {
	// 		$articleId = $_POST['id'];
	// 		$this->articleDelete($articleId, $article);
	// 	}
	// 	// $show($_POST);

	// 	if(isset($_GET['id'])){
	// 		$articleId =$_GET['id'];
	// 		$this->cwViewOwnArticle($articleId);

	// 	}
	// }

	// private function articleDelete($data, $article)
	// {
	// 	$article->delete($data, 'id');
	// 	redirect("cwArticleDisplay");
	// }

	// public function cwViewOwnArticle($articleId){
	// 	$article =new article;
	// 	$articleData = $article->where($articleId);
	// 	$this->view('cwViewOwnArticle',$articleData);
	// }




}
