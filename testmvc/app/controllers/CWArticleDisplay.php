<?php 

/**
 * home class
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

		$this->view('cwArticleDisplay',$data);

		if(isset($_POST['id'])){
			$articleId = $_POST['id'];
			$this->articleDelete($articleId,$article);
		}
		// $show($_POST);
	}

	private function articleDelete($data,$article){
		$article ->delete($data, 'id');
		redirect("cwArticleDisplay");
	}
}