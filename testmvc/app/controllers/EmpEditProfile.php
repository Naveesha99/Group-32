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
        // $empId = isset($_GET['id']) ? $_GET['id'] : null;
        // echo $empId;
        $emp = new Employee;
        $user = new User;

        if ($empId) {
            $arr1['empEmail'] = $email;
            $empData = $emp->where($arr1);

            if ($empData) {
                $data['employee'] = $empData;
            }
        }


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $arr['empName'] = $_POST['empName'];
            $arr['empEmail'] = $_POST['empEmail'];
            $arr['empContact'] = $_POST['phone'];
            $arr['empAddress'] = $_POST['address'];
            


            if ($emp->validateNew($arr)) {
    
                
                $emp->update($empId, $arr, 'id');
                redirect('employeeSetting');
            }
            
            
        }
        $this->view('employee/empEditProfile', $data);
    }
}
