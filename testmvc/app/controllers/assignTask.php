<?php

class AssignTask
{
    use Controller;

    public function index()
    {
        $task = new Task;
        $employee = new Employee;
        $employeeTask = new EmployeeTask;
        $data['employeetask'] = $employeeTask->findAll();
        $data['task'] = $task->findAll();
        $data['employee'] = $employee->findAll();

        if (isset($_POST['check'])) {
            $taskType = $_POST['taskType'];

            foreach ($data['task'] as $row) {
                if ($row->taskType == $taskType) {
                    $employeeType = $row->employeeType;
                }
            }
            // show($taskType);  
            $data['available'] = [];
            foreach ($data['employee'] as $row) {
                if ($row->empRoll == $employeeType) {
                    $empName = $row->empName;
                    foreach ($data['employeetask'] as $row2) {
                        if (
                            (($row2->assignEmployee == $empName) && ($row2->date == $_POST['date'])) && (($row2->endTime >= $_POST['startTime']) && ($row2->startTime <= $_POST['endTime'])) ||
                            (($_POST['endTime'] >= $row2->startTime) && ($_POST['startTime'] <= $row2->endTime))
                        ) {
                            echo "Employee is not available";
                        } else {
                            $data['notTask'][] = $empName;
                            break;
                            // show($data['available']);
                        }
                    }
                }
            }
            $req = new EmpRequest;
            foreach($data['notTask'] as $row){
                $arr2['employee_name'] = $row;
                // show($arr2);
                $result3 = $req->first($arr2);
                if($result3){
                    if ($result3->start_date <= $_POST['date'] && $result3->end_date >= $_POST['date']) {
                        echo "Employee is not available";
                        // break;
                    }else{
                        $data['available'][] = $row;
                        break;
                    }
                }
                $data['available'][] = $row;
                // break;
            }
            // show($data['available']);
        }
        $temp1 = [
            'taskType' => $_POST['taskType'],
            'date' => $_POST['date'], // Use null coalescing operator to avoid errors if $_POST['date'] is not set
            'startTime' => $_POST['startTime'],
            'endTime' => $_POST['endTime']
        ];

        $data['temp1'] = $temp1;

        if (isset($_POST['submit'])) {
            $arr1['empName'] = $_POST['assignEmployee'];
            $result = $employee->first($arr1);
            $arr2['email'] = $result->empEmail;
            $user = new User;
            $result2 = $user->first($arr2);

            $insertData = [
                'taskType' => $_POST['taskType'],
                'date' => $_POST['date'],
                'startTime' => $_POST['startTime'],
                'endTime' => $_POST['endTime'],
                'assignEmployee' => $_POST['assignEmployee'],
                'location' => $_POST['location'],
                'empID' => $result2->id
            ];
            // show($insertData);
            $message = new Message; 
            $message->employeeNotification($result2->id, $_POST['taskType'], $_POST['startTime'], $_POST['endTime'], $_POST['location']);
            $employeeTask->insert($insertData);
        }
        $this->view('admin/assignTask', $data);
    }
}
