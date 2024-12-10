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
			redirect('login');
			exit();
		}


		$cwId =$_SESSION['USER']->id;


		$article = new Article;
		// $like = new Like;
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
		
		$data['articles'] = $result;
		

		// $articleId['id'] = $_POST['id'];
		
		// $insertData =[
		// 		'cwId' => $cwId,
		// 		'articleId' => $articleId['id']
	
		// 	];
		// 	show($insertData);
		// 	$like->insert($insertData);

		
		

		
		

		if ($_SESSION['USER']->user_type == 'Content Writer') {
			$this->view('contentwriter/cwDramaPortal', $data);
		}
		
	}
}
