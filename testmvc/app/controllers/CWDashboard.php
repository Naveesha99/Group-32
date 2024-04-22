<?php
// session_start();
/**
 * content writer dashboard class
 */
class CWDashboard
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
		$article = new article;
		$result = $article->findPublishArticles();
		$draft = $article->getDraftArticles();

		$total = count($result);
		$data['draft'] = count($draft);
		$data['published'] =$total;
		$data['result'] = $result;

		$this->view('contentwriter/cwDashboard', $data);
	}
}
