<?php

class assignTask
{
    use Controller;

    public function index()
    {
        // if (empty($_SESSION['USER'])) {
        //     // Redirect or handle the case when the user is not logged in
        //     // For example, you might want to redirect them to the login page.
        //     redirect('login');
        //     exit();
        // }

        date_default_timezone_set('Asia/Colombo');
        $data = [];
        $date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
        $task = new Task;

        if ($date) {
            $arr['date'] = $date;

            $dateTaskData = $task->where($arr);

            if ($dateTaskData) {
                $data['task'] = $dateTaskData;
            } else {
                echo "task not found";
                exit();
            }

            $taskID = isset($_GET['id']) ? $_GET['id'] : null;
            // show((int)$taskID);
            if ($taskID) {
                $arr['id'] = $taskID;

                $taskData = $task->where($arr);
                // show($taskData);
                if ($taskData) {
                    $data['selectedTask'] = $taskData;
                } else {
                    echo "task not found";
                    exit();
                }
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $taskData = [
            'taskType' => $_POST['taskType'],
            'date' => $_POST['date'],
            'startTime' => $_POST['startTime'],
            'endTime' => $_POST['endTime'],
            'location' => $_POST['location'],
            'count' => $_POST['count'],
            'status' => 'assigned'
            ];

            $task->update($_POST['id'], $taskData, 'id');

            for($i = 0; $i < count($_POST['assignedEmp']); $i++){
            $employeeTaskData = [
                'taskID' => $_POST['id'],
                'empID' => $_POST['assignedEmp'][$i],
                'date' => $_POST['date'],
                'startTime' => $_POST['startTime'],
                'endTime' => $_POST['endTime']
            ];
            // show($employeeTaskData);

            $employeetask = new EmployeeTask;
            $employeetask->insert($employeeTaskData);
            }
            redirect('adminemployee');
        }



        $this->view('admin/assignTask', $data);
    }
}
