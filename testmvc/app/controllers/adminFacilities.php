<?php

/**
 * home class
 */
class adminFacilities
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
		$facilities = new Facilities;
		$result['facility'] = $facilities->findAll();
		$data['facility'] = $result['facility'];

		$this->view('admin/adminFacilities', $data);
	}
	


	public function updateFacilities($data){
	show($data);

		$name=$data['name'];
		$id = $data['id']; 
		$facilities = new Facilities;
		
		


				$facname=$data['name'];
				if ($_FILES["icon"]["error"] == 4) {
					// echo
					// "<script> alert('Image Does Not Exist'); </script>";
				} else {
					$fileName = $_FILES["icon"]["name"];
					show($fileName);
					$tmpName = $_FILES["icon"]["tmp_name"];
					$imageExtension = pathinfo($fileName, PATHINFO_EXTENSION);
					$imageExtension_lc = strtolower($imageExtension);
					$validImageExtension = ["jpg", "jpeg", "png"];
					// show($imageExtension_lc);
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
					}
				}

				if ($_FILES["icon"]["error"] == 4) {
					$arrOrder = [
						'name' => $name,
						// 'icon' => $fileNameNew,
					];
				}
				else{
				$arrOrder = [
					'name' => $name,
					'icon' => $fileNameNew,
				];
			}

		$facilities->update($id, $arrOrder); // Use $id instead of $data['id']
		    redirect('adminFacilities');

	}


}
