<?php 


class leaveRequest
{
	use Controller;

	public function index()
	{

		$data = [];
		$leaveReq=new EmpRequest;
		$result=$leaveReq->findAll();
		$data=$result;
		// show($data);
		$this->view('admin/leaveRequest',$data);

		// if (isset($_POST['id'])) {
		// 	$articleId = $_POST['id'];
		// 	$this->requestDelete($articleId, $article);
		// }
	}

	// private function articleDelete($data, $article)
	// {
	// 	$article->delete($data, 'id');
	// 	redirect("cwArticleDisplay");
	// }
}