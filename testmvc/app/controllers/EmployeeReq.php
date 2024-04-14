<?php

/**
 *  employee requests dashboard
 */

 class EmployeeReq
 {

    use Controller;

	public function index()
	{
		// if (empty($_SESSION['USER'])) {
		// 	// Redirect or handle the case when the user is not logged in
		// 	// For example, you might want to redirect them to the login page
		// 	redirect('cwLogin');
		// 	exit();
		// }

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $emp_req = new EmpRequest;
        $result = $emp_req->findAll();
        $data = $result;

        $this->view('employee/employeeReq',$data);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['delete_request'])){
                $reqId = $_POST['delete_request'];
                $this->requestDelete($reqId, $emp_req);
            }


        }

    }

    private function requestDelete($data, $emp_req){
        $emp_req->delete($data, 'id');
        redirect('employeeReq');
    }
 }