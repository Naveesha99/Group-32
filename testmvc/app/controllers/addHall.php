<?php

/**
 * home class
 */
class addHall
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
        $facilities1=$facilities->findAll();

        if (is_array($facilities1) || is_object($facilities1)) {
            foreach ($facilities1 as $key) {
            // unset($key->id);
            unset($key->icon);
            }
        }
	

        // foreach($facilities1 as $key){
		// 	// unset($key->id);
		// 	unset($key->icon);
		// }
        $data['facility'] = $facilities1;

		if($_SERVER['REQUEST_METHOD'] == "POST"){
            show("POST 1");
            show($_POST);

            $hallname=$_POST['hallno'];
            if ($_FILES["image"]["error"] == 4) {
                echo
                "<script> alert('Image Does Not Exist'); </script>";
            } else {
                // redirect('adminDrama');
                $fileName = $_FILES["image"]["name"];
                $tmpName = $_FILES["image"]["tmp_name"];
                // $validImageExtension = ['jpg', 'jpeg', 'png'];
                // $imageExtension = explode('.', $fileName);
                // $imageExtension = strtolower(end($imageExtension));

                // if (!in_array($imageExtension, $validImageExtension)) {

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
                    show($fileName);

                    // $newImageName = uniqid();
                    $fileNameNew = "hall" . $hallname . '.' . $imageExtension;
                    show($fileNameNew);

                    $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/upload/halls/' . $fileNameNew;
                    show($fileDestination);

                    move_uploaded_file($tmpName, $fileDestination);
                    // echo
                    // "
                    // <script>
                    //   alert('Successfully Added');
                      
                    // </script>
                    // ";
                }

            }

			$hall = new Hall;				
			if($hall->validate($_POST))
			{
                $insertData=[
                    'hallno'=>$_POST['hallno'],
                    'amountOneHour'=>$_POST['amountOneHour'],
                    // 'amountSounds'=>$_POST['amountSounds'],
                    // 'amountStandings'=>$_POST['amountStandings'],
                    'headCount'=>$_POST['headCount'],
                    'image'=>$fileNameNew,
                    'content'=>$_POST['content'],
                    'status'=>$_POST['status'],
                ];

				// $hall->insert($_POST);
                $hall->insert($insertData);
                $hallFacility = new HallFacilities;
                for($i=0; $i<count($_POST['facility']); $i++){
                    $hallfac=[
                        'hallno'=>$_POST['hallno'],
                        'facility' => $_POST['facility'][$i],
                    ];
                    $hallFacility->insert($hallfac);
                }
				redirect('adminHalls');
			}
			else{
			}
	
			$data['errors'] = $hall->errors;			
			}
		
		$this->view('admin/addHall', $data);
	}
	
}

