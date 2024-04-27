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
			redirect('login');
			exit();
		}

		$cwId= empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;
		$article = new Article;

		if ($cwId) {
			$arr1['cw_id'] = $cwId;
			$articleData = $article->where($arr1);
			if ($articleData) {

				$result = array_filter($articleData, function ($article) {
					return $article->status == 1 && $article->progress == 'accepted';
				});

				$draft = array_filter($articleData, function ($article) {
					return $article->status == 0 ;
				});

            } else {
                echo "Article not found.";
                exit();
            }
		}
		
		

		$total = count($result);
		$data['draft'] = count($draft);
		$data['published'] =$total;
		$data['result'] = $result;

		$this->view('contentwriter/cwDashboard', $data);
	}
}
