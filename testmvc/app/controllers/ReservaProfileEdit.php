<?php 

/**
 * login class
 */
class ReservaProfileEdit
{
	use Controller;

	public function index()
	{
		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('cwLogin');
			exit();
		}

		$data = [];

		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Check if the userID has been sent
			if (isset($_POST['id'])) {
				// Get the userID from the POST data
				$userID = $_POST['id'];
				$fromUserTable=new User;
				$fromReservatable = new Reservationists;
				$fromUser1=$fromUserTable->where(['id'=>$userID]);
				$findfromReserva=[
					'email'=>$fromUser1[0]->email
				];
				$fromReserva1=$fromReservatable->where($findfromReserva);
				$data=[
					'fromUser1'=>$fromUser1,
					'fromReserva1'=>$fromReserva1
				];
				$this->view('reservaProfileEdit',$data);

				// Now you can use $userID as needed
				// echo "User ID: " . $userID;

			} else {
				// Handle the case where userID is not set
				echo "User ID not found";
			}
		} else {
			// Handle the case where the form has not been submitted
			echo "Form not submitted";
		}

		

	}

}
