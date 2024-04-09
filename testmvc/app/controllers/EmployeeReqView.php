<?php 

/**
 * home class
 */
class EmployeeReqView
{
	use Controller;

	public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $data =[];
        $reqId = isset($_GET['id'])? $_GET['id'] : null;
        // echo $reqId;

        

		$this->view('employee/employeeReqView');
	}

}