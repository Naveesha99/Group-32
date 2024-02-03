<?php 

/**
 * ReservaHall1 class
 */
class ReservaHall1
{
	use Controller;

	public function index()
	{
		$data = [];
		echo '<script>console.log("Before inside if (POST request)");</script>';

		if($_SERVER['REQUEST_METHOD'] == "POST"){

		$reservationequests = new Reservationrequests;
			
		if($reservationequests->validate($_POST))
		{
			$reservationequests->insert($_POST);
			redirect('reservaSentReq');
		}

		$data['errors'] = $reservationequests->errors;			
		}


		$this->view('reservaHall1',$data);
	}

}

