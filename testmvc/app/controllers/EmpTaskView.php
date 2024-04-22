<?php

/**
 * task view class
 */

class empTaskView
{
    use Controller;

    public function index()
    {

        if (empty($_SESSION['USER'])) {
            // Redirect or handle the case when the user is not logged in
            // For example, you might want to redirect them to the login page
            redirect('cwLogin');
            exit();
        }

        // $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $data = [];
        $taskId = isset($_GET['id']) ? $_GET['id'] : null;
        echo $taskId;

        if ($taskId) {
            $emp_task = new Emp_tasks;
            $arr1['id'] = $taskId;

            $taskData = $emp_task->where($arr1);

            if ($taskData) {
                $data['emp_task'] = $taskData;
                // show($data);
            } else {
                echo "task not found";
                exit();
            }
        }



        $this->view('employee/empTaskView', $data);
    }
}
