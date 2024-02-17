<?php 

/**
 * login class
 */
class ReservaLogin
{
	use Controller;

	public function index()
	{
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$reservationists = new Reservationists;
			$arr['username'] = $_POST['username'];

			$row = $reservationists->first($arr);
			
			if($row)
			{
				if($row->password === $_POST['password'])
				{
					$_SESSION['USER'] = $row;
					redirect('reservaHall');
				}
			}

			$reservationists->errors['username'] = "Wrong username or password";

			$data['errors'] = $reservationists->errors;
		}

		$this->view('reservaLogin',$data);
	}

}
