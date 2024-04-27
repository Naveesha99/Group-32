<?php

/**
 *  employee profile
 */
class EmployeeSetting
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

        $empid = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;
        $empname = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->fullname;
        $empEmail = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;


        $emp = new Employee;
        $profiles = new Profiles;

        if ($empid) {
            $arr1['empEmail'] = $empEmail;
            $empData = $emp->where($arr1);
            // $arr2['userid'] = $empid;
            // $profileData = $profiles ->where($arr2);


            if ($empData) {
                $result = $empData;
            }
        }
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
                    $fileNameNew = "profile" . $empid . '.' . $imageExtension;

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
                      alert('Successfully Added');
                      
                    </script>
                    ";
                }
            }

            $arr2['userid'] = $empid;
            $existingProfile = $profiles->where($arr2);

            if ($existingProfile) {
                // If a profile photo exists, update the database with the new file name
                $updateData = [
                    'images' => $fileNameNew
                ];
                $profiles->update($empid, $updateData, 'userid');
                $_SESSION['PROFILE_IMAGE'] = $fileNameNew;
                show($_SESSION['PROFILE_IMAGE']);
                redirect('employeeSetting');
            } else {
                // If a profile photo doesn't exist, insert the new photo into the database
                $insertData = [
                    'userid' => $empid,
                    'name' => $empname,
                    'images' => $fileNameNew
                ];
                $profiles->insert($insertData);
                $_SESSION['PROFILE_IMAGE'] = $fileNameNew;
                show($_SESSION['PROFILE_IMAGE']);
                
            }
        }

        $prof = null;

        if ($empid) {
            $arr2['userid'] = $empid;
            $profileData = $profiles->where($arr2);

            if ($profileData) {
                $prof = $profileData;
                $data['profile'] = $prof;
            }
        }




        $data['emp'] = $result;
        $data['profile'] = $prof;
        
        // show($data);


        $this->view('employee/employeeSetting', $data);
    }
}
