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

        if($reqId){
            $emp_req = new EmpRequest;
            $arr1['id'] = $reqId;

            $reqData = $emp_req->where($arr1);
            
            if($reqData){
                $data['emp_req']=$reqData;
                // show($data);
            }else{
                echo "request not found";
                exit();
            }
        }



		$this->view('employee/employeeReqView',$data);
	}

}