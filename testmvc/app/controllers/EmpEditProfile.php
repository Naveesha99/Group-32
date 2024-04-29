<?php

class EmpEditProfile
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
        $email = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        $empId = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;

        $data = [];
        // $empIdNew = isset($_GET['id']) ? $_GET['id'] : null;
        // echo $empId;
        $emp = new Employee;
        $user = new User;

        if ($empId) {
            $arr1['empEmail'] = $email;
            $empData = $emp->where($arr1);
            $empIdNew = $empData[0]->id;
            //show($empIdNew);

            if ($empData) {
                $data['employee'] = $empData;
            }
        }


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $arr['empName'] = $_POST['empName'];
            $arr['empEmail'] = $_POST['empEmail'];
            $arr['empContact'] = $_POST['phone'];
            $arr['empAddress'] = $_POST['address'];
            $arr2['fullname'] = $_POST['empName'];
            $arr2['email'] = $_POST['empEmail'];
            // show($arr1);




            if ($emp->validateNew($arr)) {


                $emp->update($empIdNew, $arr, 'id');
                // redirect('employeeSetting');
            }

            if ($user->validateUser($arr2)) {
                //show($arr1);


                $user->update($empId, $arr2, 'id');
                redirect('employeeSetting');
            }
        }
        if ($_SESSION['USER']->user_type == 'Employee') {
            $this->view('employee/empEditProfile', $data);
        }
    }
}
