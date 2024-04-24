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

        $data=[];
        $cwId = isset($_GET['id']) ? $_GET['id'] :null;
        // echo $empId;
        $cw = new Content_writers;

        if($cwId){
            $arr1['id'] = $cwId;
            $empData = $cw->where($arr1);

            if($empData){
                $data['contentwriter'] = $empData;
            }
    
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $insertData = [
                'username' => $_POST['employee_name'],
                'password' =>  $_POST['password'],
            ];
            // show($insertData);

            $cw->update($cwId, $insertData, 'id');
            redirect('cwProfile');
        }

        


        $this->view('contentwriter/cwEditProfile',$data);
    }
}