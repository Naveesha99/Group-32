<?php 


class ReservaPayment
{

	use Controller;

	public function index()
	{
		

		$data = [];
	

// //$this->view('reservaPayment', $data);

		// $id = $_GET['id'];
		$id = isset($_POST['id']) ? $_POST['id'] : null;
		$hall = isset($_POST['hall']) ? $_POST['hall'] : null;
		$hours = isset($_POST['hours']) ? $_POST['hours'] : null;
		$amount = isset($_POST['amount']) ? $_POST['amount'] : null;
		$hcount = isset($_POST['hcount']) ? $_POST['hcount'] : null;
		$date = isset($_POST['date']) ? $_POST['date'] : null;
		$startTime = isset($_POST['startTime']) ? $_POST['startTime'] : null;
		$endTime = isset($_POST['endTime']) ? $_POST['endTime'] : null;


		// echo "Hall: " . $hall . "<br>";
		$detailsofReq = [
			'id' => $id,
			'hall' => $hall,
			'hours' => $hours,
			'amount' => $amount,
			'hcount' => $hcount,
			'date' => $date,
			'startTime' => $startTime,
			'endTime' => $endTime
		];


		$halldetails=new Hall;
		
		$detailsofhall = $halldetails->where(['hallno' => $hall]);
		// $detailsofhall = $halldetails->first($detailsofhall);

		// $amountOneHour = $detailsofhall ? $detailsofhall->amountOneHour : null;
				// echo "Hall: " . $detailsofhall->id . "<br>";

			// $data=[
			// 	'acceptedReservations'=>$acceptedReservations1,
			// 	'hall'=>$detailsofhall,
			// ];

			$data = [
				// 'id' => $id,
				// 'hall' => $hall,
				// 'hours' => $hours,
				// 'amount' => $amount,
				'detailsofReq' => $detailsofReq,
				'detailsofhall' => $detailsofhall
			];
	// show($data);


		$this->view('reservaPayment',$data);
	}
}