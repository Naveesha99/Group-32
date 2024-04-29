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

			$facname=$_POST['name'];
			if ($_FILES["icon"]["error"] == 4) {
                echo
                "<script> alert('Image Does Not Exist'); </script>";
            } else {
                $fileName = $_FILES["icon"]["name"];
                $tmpName = $_FILES["icon"]["tmp_name"];
                $imageExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                $imageExtension_lc = strtolower($imageExtension);
                $validImageExtension = ["jpg", "jpeg", "png"];
                if (!in_array($imageExtension_lc, $validImageExtension)) {
                    echo
                    "
                    <script>
                      alert('Invalid Image Extension');
                    </script>
                    ";
                } else {
                    $fileNameNew = "facility" . $facname . '.' . $imageExtension;

                    $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/upload/facilities/' . $fileNameNew;

                    move_uploaded_file($tmpName, $fileDestination);
                    // echo
                    // "
                    // <script>
                    //   alert('Successfully Added');
                      
                    // </script>
                    // ";
                }

            }



			$facility = new Facilities;
				
			if($facility->validate($_POST))
			{
				// show("POST 1");
				// show()
			// echo '<script>console.log("Message to print in console");</script>';

			$insertData = [
				'icon' => $fileNameNew,
				'name' => $_POST['name'],
			];

				$facility->insert($insertData);
				redirect('adminFacilities');
			}
			else{
				// echo '<script>console.log("Message to print in console2");</script>';
			}
	
			$data['errors'] = $facility->errors;			
			}
		if($_SESSION['USER']->user_type == 'admin'){
		$this->view('admin/addFacility', $data);
		}
	}
	
}

