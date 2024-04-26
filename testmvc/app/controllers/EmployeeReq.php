<?php

/**
 *  employee requests dashboard
 */

class EmployeeReq
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

        $empId = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;

        $emp_req = new EmpRequest;
        if ($empId) {
			$arr1['emp_id'] = $empId;
			$articleData = $emp_req->where($arr1);
			if ($articleData) {

				$result = $articleData;
            } else {
                echo "Request not found.";
                exit();
            }
		}
		
        $data = $result;

        $this->view('employee/employeeReq', $data);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_request'])) {
                $reqId = $_POST['delete_request'];
                $this->requestDelete($reqId, $emp_req);
            }
        }
    }

    private function requestDelete($data, $emp_req)
    {
        $emp_req->delete($data, 'id');
        redirect('employeeReq');
    }
}
