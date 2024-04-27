<?php

/**
 * home class
 */
class EmployeeReqView
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

        // $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $data = [];
        $reqId = isset($_GET['id']) ? $_GET['id'] : null;
        // echo $reqId;

        if ($reqId) {
            $emp_req = new EmpRequest;
            $arr1['id'] = $reqId;

            $reqData = $emp_req->where($arr1);

            if ($reqData) {
                $data['emp_req'] = $reqData;
                // show($data);
            } else {
                echo "request not found";
                exit();
            }
        }



        $this->view('employee/employeeReqView', $data);
    }
}
