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


		$cwId = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;
		// $this->view('cwArticleDisplay');
		$article = new Article;
		$result = [];
		if ($cwId) {
			$arr1['cw_id'] = $cwId;
			$articleData = $article->where($arr1);
			if ($articleData) {

				$result = array_filter($articleData, function ($article) {
					return $article->status == 1 && $article->progress == 'accepted';
				});
			} 
		}

		$data = $result;

		if($_SESSION['USER']->user_type == 'Content Writer'){
		$this->view('contentwriter/cwArticleDisplay', $data);
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (isset($_POST['delete_article'])) {
				$articleId = $_POST['delete_article'];
				$this->articleDelete($articleId, $article);
			}

			if (isset($_POST['hide_article'])) {
				$articleId = $_POST['hide_article'];
				$this->articleHide($articleId, $article);
			}
		}
	}

	private function articleDelete($data, $article)
	{
		$article->delete($data, 'id');
		redirect("contentwriter/cwArticleDisplay");
	}

	private function articleHide($data, $article)
	{
		$arr['id'] = $data;
		$articleData = $article->where($arr);
		if($articleData[0]->hide == 1){
			$articleData[0]->hide =0;

		}else{
			$articleData[0]->hide =1;
		}
		$article->update($data, (array)$articleData[0], 'id');
		redirect("contentwriter/cwArticleDisplay");
	}
}
