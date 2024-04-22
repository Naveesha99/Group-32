<?php

class Upload
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

        $id = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;
        echo $id;

        $emp = new ProfileImg;


        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];

            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {

                    if ($fileSize < 100000000) {
                        $fileNameNew = "profile".$id . "." . $fileActualExt;
                        $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/Upload/' . $fileNameNew;
                        // echo $fileDestination;
                        echo 'photo uploaded succssfully';
                        // $this->$emp['status'] = 0;
            
                        move_uploaded_file($fileTmpName, $fileDestination);
                    } else {
                        echo "your fil is too big!";
                    }
                } else {
                    echo "There was an error uploading your file!";
                }
            } else {
                echo "you cannot upload fils of this type!";
            }

            
        }

        $this->view('contentwriter/upload');
    }
}
