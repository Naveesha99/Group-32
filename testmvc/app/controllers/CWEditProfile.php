<?php

class CWEditProfile{
    use Controller;

    public function index(){
        if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('cwLogin');
			exit();
		}
        $empEmail = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        $data=[];
        $cwId = isset($_GET['id']) ? $_GET['id'] :null;
        // echo $empId;
        $cw = new User;

        if($cwId){
            $arr1['email'] = $empEmail;
            $empData = $cw->where($arr1);

            if($empData){
                $data['contentwriter'] = $empData;
            }
    
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $insertData = [
                'empName' => $_POST['employee_name'],
                // 'password' =>  $_POST['password'],
            ];
            // show($insertData);

            $cw->update($cwId, $insertData, 'id');
            redirect('cwProfile');
        }

        


        $this->view('contentwriter/cwEditProfile',$data);
    }
}