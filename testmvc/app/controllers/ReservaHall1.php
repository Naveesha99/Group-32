<?php 

/**
 * ReservaHall1 class
 */
class ReservaHall1
{
	use Controller;

	public function index()
	{
		// session_start(); // Start the session

		// if (empty($_SESSION['RESERVATIONISTS'])) {
		// 	// Redirect or handle the case when the user is not logged in
		// 	// For example, you might want to redirect them to the login page
		// 	redirect('reservalogin');
		// 	exit();
		// }

		if(empty($_SESSION['USER'])){
			redirect('login');
			exit();
		}

		

		


        // if (isset($_SESSION['USER'])) {
        // if (isset($_SESSION['RESERVATIONISTS'])) {

		// 	echo $_SESSION['RESERVATIONISTS']->username; 
        //     }
        //         else{show('No session');
		// 	}
            




		$hallId = isset($_GET['hallno']) ? $_GET['hallno'] : '';
		// show($hallId);
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


		foreach($detailsofhall as $key){
			unset($key->content);
			unset($key->image);
		}
			$data=[
				'acceptedReservations'=>$acceptedReservations1,
				'hall'=>$detailsofhall,
			];
		// show($data);
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

