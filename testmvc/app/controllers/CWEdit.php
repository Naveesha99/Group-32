<?php

class CWEdit
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


        // $username = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->username;
        $employeeid = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;

        $profiles = new Profiles;

        if (isset($_POST['submit'])) {
            // $_POST['name'] =  $username;

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
                    $fileNameNew = "profile" . $employeeid . '.' . $imageExtension;

                    $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/Upload/' . $fileNameNew;

                    move_uploaded_file($tmpName, $fileDestination);
                    echo
                    "
                    <script>
                      alert('Successfully Added');
                      
                    </script>
                    ";
                }
            }

            $insertData = [
                'userid' => $employeeid,
                'name' => $_POST['name'],
                'images' => $fileNameNew
            ];
            show($insertData);

            $profiles->insert($insertData);
        }

        $this->view('contentwriter/cwEdit');
    }
}
