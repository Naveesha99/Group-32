<?php 

// session_start();
class ReservaHall
{
	use Controller;

	public function index()
	{
		if(isset($_SESSION['USER'])){
			// show($_SESSION['USER']->username);
		}
		// show($_SESSION['USER']);
		// if (isset($_SESSION['USER'])) {
		// 	$loggedInUsername = $_SESSION['reservationists']->username;
		
		// 	echo "Logged-in User: $loggedInUsername";
		// } else {
		// 	echo "User is not logged in.";
		// }

		// show($_SESSION['USER']);
		$data = [];
		$halls= new Hall;
		$halls1=$halls->findAll();
		$facilities= new Facilities;
		$facilities1=$facilities->findAll();
		$hallfacilities = new HallFacilities;
		$hallfacilities1=$hallfacilities->findAll();

		$data=[
			'halls'=>$halls1,
			'facilities'=>$facilities1,
			'hallfacilities'=>$hallfacilities1
		];

		$this->view('reservaHall',$data);
	}

}
