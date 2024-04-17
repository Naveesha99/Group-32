<?php 

/**
 * home class
 */
class ContactUs
{
	use Controller;
	public function index()
	{
		if(isset($_SESSION['USER'])){
			show($_SESSION['USER']->username);
		}

		$data = [];

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			echo '<script>console.log("Message to print in consoleeeee");</script>';

			$userQueries = new Userqueries;
				
			if($userQueries->validate($_POST))
			{
			echo '<script>console.log("Message to print in console");</script>';

				$userQueries->insert($_POST);
				redirect('contactUs');
			}
			else{
				echo '<script>console.log("Message to print in console2");</script>';
			}
	
			$data['errors'] = $userQueries->errors;			
			}

		$this->view('contactUs',$data);
	}
}