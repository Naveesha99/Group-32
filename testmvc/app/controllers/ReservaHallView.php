<?php 

// session_start();
class ReservaHallView
{
	use Controller;

	public function index()
	{
		if(isset($_SESSION['USER'])){
			show($_SESSION['USER']->username);
		}
		// show($_SESSION['USER']);
		// if (isset($_SESSION['USER'])) {
		// 	$loggedInUsername = $_SESSION['reservationists']->username;
		
		// 	echo "Logged-in User: $loggedInUsername";
		// } else {
		// 	echo "User is not logged in.";
		// }

		$sentReq=new ReservationRequests;
		$result=$sentReq->findAll();
		$data=$result;
		// show($data);
		$this->view('reservaHallView',$data);
	}

}
