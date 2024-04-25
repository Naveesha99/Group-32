<?php 


class ReservaSettings
{
	use Controller;

	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('reservalogin');
			exit();
		}
		
		$data = [];
		$fromUser = new User;
		$fromReserva = new Reservationists;

		$fromUser1=$fromUser->where(['id'=>$_SESSION['USER']->id]);
		$getemail=$fromUser1[0]->email;
		$findIdFromReserva=[
			'email'=>$getemail
			// 'email'=>'senudi@gmail.com'
		];
		$fromReserva1=$fromReserva->where($findIdFromReserva);
		$data=[
			'fromUser1'=>$fromUser1,
			'fromReserva1'=>$fromReserva1
		];

		$uid=$_SESSION['USER']->id;

		if(isset($_POST['submit'])){
			
			if ($_FILES["image"]["error"] == 4) {
				echo
				"<script> alert('Image Does Not Exist'); </script>";
			} else {
				$fileName = $_FILES["image"]["name"];
				// $fileSize = $_FILES["image"]["size"];
				$tmpName = $_FILES["image"]["tmp_name"];

				$validImageExtension = ['jpg', 'jpeg', 'png'];
				$imageExtension = explode('.', $fileName);
				$imageExtension = strtolower(end($imageExtension));

				if (!in_array($imageExtension, $validImageExtension)) {
					echo
					"
                    <script>
                      alert('Invalid Image Extension');
                    </script>
                    ";
				} else {
					// $newImageName = uniqid();
					$fileNameNew = "profile" . $uid . '.' . $imageExtension;

					$fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/Upload/' . $fileNameNew;

					if (file_exists($fileDestination)) {
						unlink($fileDestination); // Delete the existing image file
					}

					move_uploaded_file($tmpName, $fileDestination);
					// $_SESSION['USER']->image = $fileNameNew;
					// show($_SESSION['USER']->image);

					echo
					"
                    <script>
                      
                    </script>
                    ";
				}
			}
			show($fileNameNew);
			$resId=$fromReserva1[0]->id;
			$result=[
				'fullname'=>$fromReserva1[0]->fullname,
				'username'=>$fromReserva1[0]->username,
				'email'=>$fromReserva1[0]->email,
				'contactNumber'=>$fromReserva1[0]->contactNumber,
				'nic'=>$fromReserva1[0]->nic,
				'password'=>$fromReserva1[0]->password,
				'date'=>$fromReserva1[0]->date,
				'images'=>$fileNameNew
			];

			$fromReserva->update($resId,$result,'id');
		}		
		$this->view('reservaSettings',$data);
	}


}
