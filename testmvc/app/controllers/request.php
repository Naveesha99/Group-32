<?php 


class request
{
	use Controller;

	public function index()
	{

		// $data = [];
		$sentReq=new ReservationRequests;
		$result=$sentReq->findAll();
		$data=$result;
		// show($data);
		$this->view('admin/request',$data);

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
