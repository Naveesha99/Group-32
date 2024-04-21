<?php

class EmpEditProfile{
    use Controller;

    public function index(){
        if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('empLogin');
			exit();
		}

        $data=[];
        $empId = isset($_GET['id']) ? $_GET['id'] :null;
        // echo $empId;
        $emp = new Employee;

        if($empId){
            $arr1['id'] = $empId;
            $empData = $emp->where($arr1);

            if($empData){
                $data['employee'] = $empData;
            }
    
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $insertData = [
                'empName' => $_POST['employee_name'],
                'password' =>  $_POST['password'],
            ];
            // show($insertData);

            $emp->update($empId, $insertData, 'id');
            redirect('employeeSetting');
        }

        


        $this->view('employee/empEditProfile',$data);
    }
}