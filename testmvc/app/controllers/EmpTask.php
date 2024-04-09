<?php

/**
 * employee Task class
 */

 class EmpTask{
    use Controller;

    public function index()
    {
        
		// if (empty($_SESSION['USER'])) {
		// 	// Redirect or handle the case when the user is not logged in
		// 	// For example, you might want to redirect them to the login page
		// 	redirect('login');
		// 	exit();
		// }

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $emp_task = new Emp_tasks;
        $result = $emp_task->findAll();
        $data = $result;

        $this ->view('employee/empTask',$data);
    }

 }