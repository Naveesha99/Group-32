<?php

/**
 *  cw drama portal
 */
class CWDramaPortal
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


		$data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

		$article = new article;
		$result = $article->findPublishArticles();
		$data = $result;

		$catgoryType = $this->categoryType($article);
		// show($result);

		if (isset($_POST['all'])) {
			$data['all'] = $article->findPublishArticles();
		}

		$this->view('contentwriter/cwDramaPortal', $data);
	}

	private function categoryType($article)
	{
		$result = $article->findPublishArticles();
		foreach ($result as $key) {

			unset($key->id);
			unset($key->article_name);
			unset($key->article_content);
			unset($key->image);
			unset($key->cw_id);
			unset($key->Created_at);
			unset($key->status);
			unset($key->progress);
			unset($key->likes);
			unset($key->catId);
		}
		// show($result);
		return $result;
		// $data['jobs'] = $result;
		// $this->view('addemployee', $data);
	}
}
