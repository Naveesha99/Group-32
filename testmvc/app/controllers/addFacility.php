<?php

/**
 * home class
 */
class addFacility
{
	use Controller;

	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('login');
			exit();
		}

		$data = [];

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			// echo '<script>console.log("Message to print in consoleeeee");</script>';

			$facility = new Facilities;
				
			if($facility->validate($_POST))
			{
			// echo '<script>console.log("Message to print in console");</script>';

				$facility->insert($_POST);
				redirect('adminFacilities');
			}
			else{
				// echo '<script>console.log("Message to print in console2");</script>';
			}
	
			$data['errors'] = $facility->errors;			
			}
		
		$this->view('admin/addFacility', $data);
	}
	
}

