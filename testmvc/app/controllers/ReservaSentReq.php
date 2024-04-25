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

		$sentReq=new ReservationRequests;
		// $result=$sentReq->findAll();
		$find=[
			'reservationistId'=>$_SESSION['USER']->id
		];
		
		$result=$sentReq->where($find);
		$paid=new Reservationpayments;
		$find1=[
			 	'ispaid'=>1
			];
		$result2=$paid->where($find1);
		$fromPymentTable=[];

		$i=0;
		foreach ($result as $key) 
		{
			$reqid= $key->id ;
			// $ispaid=$key->ispaid;
			foreach ($result2 as $key2) 
			{
				if ($key2->reqid==$reqid ) 
				{
						$fromPymentTable[$i] = $key2;
						$i=$i+1;
				}
			}
		}
		// show($fromPymentTable);
		// $data=$result;
		$data=[
			'reservationRequests'=>$result,
			'fromPymentTable'=>$fromPymentTable
		];
		// show($data['fromPymentTable']);

		$this->view('reservaSentReq',$data);

		// if (isset($_POST['id'])) {
		// 	$articleId = $_POST['id'];
		// 	$this->requestDelete($articleId, $article);
		// 
	}


	public function review($data) {
		$currentDateTime = date('Y-m-d H:i:s');

		// Your code here
		// echo "in review function";
		// print_r($data);
		// echo $data['review'];
		$reqId = intval($data['request_id']);
		// echo "before vardump";
		// var_dump($reqId);
		// echo gettype($reqId);
		$review=$data['review'];
		$rating=$data['rating'];
		$arrOrder = [  
			'review' => $review
			,'rating' => $rating 
			,'review_date' => $currentDateTime
		]; 
		// show($arrOrder);
	
		$resevationRequests = new ReservationRequests;
		// show($resevationRequests);
		// $resevationRequests->update($reqId, ['review' => $review] , 'id'); // Corrected
		$resevationRequests->update($reqId, $arrOrder);
		// header('Location: /reservaHall');
		// exit()
		// error_log("Review function called");
	}
}
