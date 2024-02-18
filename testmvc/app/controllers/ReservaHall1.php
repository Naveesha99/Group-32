<?php 

/**
 * ReservaHall1 class
 */
class ReservaHall1
{
	use Controller;

	public function index()
	{
		$hallId = isset($_GET['hallno']) ? $_GET['hallno'] : '';
		show($hallId);
		$reservationequests_1 = new Reservationrequests;

		// Fetch available time slots for the selected date
		// $selectedDate = isset($_POST['date']) ? $_POST['date'] : date('Y-m-d');
		// $availableTimeSlots = $reservationequests_1->getAvailableTimeSlots($hallId,$selectedDate);
		// $data = [];
		// $data = [
            // 'hallDetails' => $hallDetails,
            // 'availableTimeSlots' => $availableTimeSlots,
            // You can add more data here as needed
        // ];
		// show($data);
		$reservaReqData=[
			'hallno'=>$hallId,
			'status'=>'accepted'
		];
		// $acceptedReservations1=$reservationequests_1->where(['hallno'=>$hallId],['status' => 'accepted']);
		$acceptedReservations1=$reservationequests_1->where($reservaReqData);

		$halldetails=new Hall;
			$detailsofhall=$halldetails->where(['hallno'=>$hallId]);
			$data=[
				'acceptedReservations'=>$acceptedReservations1,
				'hall'=>$detailsofhall,
			];
		show($data);
		// echo '<script>console.log("Before inside if (POST request)");</script>';

		if($_SERVER['REQUEST_METHOD'] == "POST"){

		$reservationequests = new Reservationrequests;
			
		if($reservationequests->validate($_POST))
		{
			$reservationequests->insert($_POST);
			redirect('reservaSentReq');
		}

		$data['errors'] = $reservationequests->errors;			
		}


		$selectedDate = isset($_POST['date']) ? $_POST['date'] : date('Y-m-d');
		// $bookedTimeSlots = $reservationequests_1->getBookedTimeSlots($selectedDate);
		// $data['bookedTimeSlots'] = $bookedTimeSlots;
		echo '<script>console.log(" server req post(POST request)");</script>';
		$this->view('reservaHall1',$data);
	}
	
}

