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

		if (isset($_POST['id'])) {
			$articleId = $_POST['id'];
			$this->articleDelete($articleId, $article);
		}
		// $show($_POST);

		if(isset($_GET['id'])){
			$articleId =$_GET['id'];
			$this->cwViewOwnArticle($articleId);
			
		}
	}

	private function articleDelete($data, $article)
	{
		$article->delete($data, 'id');
		redirect("cwArticleDisplay");
	}

	public function cwViewOwnArticle($articleId){
		$article =new article;
		$articleData = $article->where($articleId);
		$this->view('contentwriter/cwViewOwnArticle',$articleData);
	}

	

	
}
