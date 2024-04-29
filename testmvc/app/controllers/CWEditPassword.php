<?php

/**
 * content writer edit password
 */

class CWEditPassword
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

        $empId = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;

        $emp = new User;

        if ($empId) {
            $arr1['id'] = $empId;
            $empData = $emp->where($arr1);

            if ($empData) {
                $data['employee'] = $empData;
            }
        }
        if (isset($_POST['submit'])) {
            $currentPassword = $_POST['current_password'];
            $newPassword = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];

            if (password_verify($currentPassword, $data['employee'][0]->password)) {
                if ($newPassword == $confirmPassword) {
                    $insertData = [
                        'password' => password_hash($newPassword, PASSWORD_DEFAULT),
                    ];


                    $emp->update($empId, $insertData, 'id');
                    redirect('employeeSetting');
                } else {
                    echo 'New password and confirm password does not match';
                }
            } else {
                echo 'Current password does not match';
            }
        }
        if ($_SESSION['USER']->user_type == 'Content Writer') {
            $this->view('contentwriter/cwEditPassword', $data);
        }
    }
}
