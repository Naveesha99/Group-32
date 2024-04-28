<?php

class CWEditProfile{
    use Controller;

    public function index(){
        if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('login');
			exit();
		}
        $empEmail = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        $cwId = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;

        $data=[];
        //$cwId = isset($_GET['id']) ? $_GET['id'] :null;
        // echo $empId;
        $cw = new User;
        $cwNew = new Employee;

        if($cwId){
            $arr1['empEmail'] = $empEmail;
            $empData = $cwNew->where($arr1);
            $cwIdNew = $empData[0]->id;

            if($empData){
                $data['contentwriter'] = $empData;
            }
    
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $arr['empName'] = $_POST['employee_name'];
            $arr['empEmail'] = $_POST['empEmail'];
            $arr['empContact'] = $_POST['phone'];
            $arr['empAddress'] = $_POST['address'];
            $arr2['fullname']= $_POST['employee_name'];
            $arr2['email']= $_POST['empEmail'];
            
            if ($cwNew->validateNew($arr)) {
    
                
                $cwNew->update($cwIdNew, $arr, 'id');
               
            }

            if ($cw->validateUser($arr2)) {
                //show($arr1);
    
                
                $cw->update($cwId, $arr2, 'id');
                redirect('cwProfile');
            }

            
            
        }

        


        $this->view('contentwriter/cwEditProfile',$data);
    }
}