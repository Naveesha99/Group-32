<?php

/**
 * home class
 */
class adminHalls
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
		$hallfacilities = new HallFacilities;
        $facilities = new Facilities;
        $hall = new Hall;

        $result1['hallfacilities'] = $hallfacilities->findAll();
        $result2['hall'] = $hall->findAll();
        $result3['facility'] = $facilities->findAll();

        $data['hallfacilities'] = $result1['hallfacilities'];
        $data['hall'] = $result2['hall'];
        $data['facility'] = $result3['facility'];
		// $result['facility'] = $facilities->findAll();
		// $data['facility'] = $result['facility'];

		$this->view('admin/adminHalls', $data);
	}
	
	// public function updateFacilities($data){
	// 	$name=$data['name'];
	// 	$icon=$data['icon'];
	// 	$arrOrder = [  
	// 		'name' => $name
	// 		,'icon' => $icon 
	// 	]; 

	// 	$facilities = new Facilities;
	// 	$facilities->update($data['id'], $arrOrder);
    public function updateHalls($data){
        show($data);
    
            $name=$data['hallno'];
            $id = $data['id']; 
            $halls = new Hall;
            
            
    
    
                    $facname=$data['hallno'];
                    if ($_FILES["image"]["error"] == 4) {
                        // echo
                        // "<script> alert('Image Does Not Exist'); </script>";
                    } else {
                        $fileName = $_FILES["image"]["name"];
                        show($fileName);
                        $tmpName = $_FILES["image"]["tmp_name"];
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
                            $fileNameNew = "HALL" . $facname . '.' . $imageExtension;
        
                            $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/upload/halls/' . $fileNameNew;
        
                            move_uploaded_file($tmpName, $fileDestination);
                        }
                    }
    
    
                    
                    $adminFacility = new HallFacilities;
                    $adminFacility->deleteByHallNo($name);

                    if ($_FILES["image"]["error"] == 4) {
                        $arrOrder = [
                            'hallno' => $name,
                            'amountOeHour' => $data['amountOneHour'],
                            'headCount' => $data['headCount'],
                            'content' => $data['content'],
                            'status' => $data['status'],
                            // 'image' => $fileNameNew,
                        ];
                    }
                    else{
                        $arrOrder = [
                            'hallno' => $name,
                            'amountOeHour' => $data['amountOneHour'],
                            'headCount' => $data['headCount'],
                            'content' => $data['content'],
                            'status' => $data['status'],
                            'image' => $fileNameNew,
                        ];
                    }

    
                $halls->update($id, $arrOrder); // Use $id instead of $data['id']
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
	// }



}
