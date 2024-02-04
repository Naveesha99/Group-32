<?php 

/**
 * content writer dashboard class
 */
class CWDashboard
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
		$article = new article;
		$result = $article->findAll();
		$data = $result;

		$this->view('cwDashboard',$data);
	}

}