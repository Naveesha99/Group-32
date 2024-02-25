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
		$data = $result;

		$this->view('contentwriter/cwDashboard', $data);
	}
}
