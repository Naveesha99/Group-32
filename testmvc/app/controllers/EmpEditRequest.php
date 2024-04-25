<?php

// edit leave request class

class EmpEditRequest
{
    use Controller;

    public function index()
    {
        if (empty($_SESSION['USER'])) {
            // Redirect or handle the case when the user is not logged in
            // For example, you might want to redirect them to the login page
            redirect('empLogin');
            exit();
        }

        // $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $data = [];
        $reqId = isset($_GET['id']) ? $_GET['id'] : null;
        // echo $reqId;
        $emp_req = new EmpRequest;

        if ($reqId) {
            $arr1['id'] = $reqId;
            $reqData = $emp_req->where($arr1);

            if ($reqData) {
                $data['emp_req'] = $reqData;
                // show($data);
            } else {
                echo "leave request not found.";
                exit();
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $emp_req->update($reqId, $_POST, 'id');
            redirect('employeeReq');
        }

        $this->view('employee/empEditRequest', $data);
    }
}
