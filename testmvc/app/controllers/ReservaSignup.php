<?php 

/**
 * signup class
 */
class ReservaSignup
{
	use Controller;

	public function index()
	{
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$reservationists = new Reservationists;
			// $user->insert($_POST);
			// redirect('login');
			if($reservationists->validate($_POST))
			{
				$reservationists->insert($_POST);
				redirect('reservaLogin');
			}

			$data['errors'] = $reservationists->errors;			
		}


		$this->view('reservaSignup',$data);
	}

}
