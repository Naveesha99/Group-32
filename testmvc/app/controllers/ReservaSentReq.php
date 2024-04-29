<?php 
header("Cache-Control: no-cache");

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





		// if(isset($_POST['cancellation'])){
		// 	echo "cancellation button clicked";
			
		// 	$id = $_POST['formid']; // Retrieve the request ID from the form
		// 	$acceptedTime = $_POST['formacceptedtime'];
		// 	show($id);
		// 	show($acceptedTime);
		// 	$reqId = intval($data['formid']);
		// // $acceptedTime = $data['acceptedTime'];	
		// $currentTime = date('Y-m-d H:i:s');
		// $timeDifference= strtotime($currentTime) - strtotime($acceptedTime);
		// show($timeDifference);

		// // $this->view('reservaSentReq',$data);

			
		// }
		// else{
		// 	echo "cancellation button not clicked";
		// }


		$this->view('reservaSentReq',$data);

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

		ob_start();
		header('Location: /reservaSentReq');
		exit();
		ob_end_flush();


		// redirect('reservaSentReq');
		// header('Location: /reservaHall');
		// exit();
		// error_log("Review function called");
	}

	// public function cancel($data) {
		
	// 		echo "cancellation button clicked";
			
	// 		$id = $_POST['formid']; // Retrieve the request ID from the form
	// 		$acceptedTime = $_POST['formacceptedtime'];
	// 		show($id);
	// 		show($acceptedTime);
	// 		$reqId = intval($data['formid']);
	// 	// $acceptedTime = $data['acceptedTime'];	
	// 	$currentTime = date('Y-m-d H:i:s');
	// 	$timeDifference= strtotime($currentTime) - strtotime($acceptedTime);
	// 	show($timeDifference);

	// 	// $this->view('reservaSentReq',$data);

			
	// 	$this->view('reservaCancel',$data);

	// }

}
