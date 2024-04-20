<?php 


class ReservaSentReq
{
	use Controller;

	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('reservalogin');
			exit();
		}

		// $data = [];
		$sentReq=new ReservationRequests;
		$result=$sentReq->findAll();
		$data=$result;
		// show($data);
		$this->view('reservaSentReq',$data);

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

	public function review($data) {
		$currentDateTime = date('Y-m-d H:i:s');

		// Your code here
		echo "in review function";
		print_r($data);
		echo $data['review'];
		$reqId = intval($data['request_id']);
		echo "before vardump";
		// var_dump($reqId);
		echo gettype($reqId);
		$review=$data['review'];
		$rating=$data['rating'];
		$arrOrder = [  
			'review' => $review
			,'rating' => $rating 
			,'review_date' => $currentDateTime
		]; 
		show($arrOrder);
	
		$resevationRequests = new ReservationRequests;
		show($resevationRequests);
		// $resevationRequests->update($reqId, ['review' => $review] , 'id'); // Corrected
		$resevationRequests->update($reqId, $arrOrder);
	}
}
