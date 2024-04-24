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

        $taskType = ''; // Initialize $taskType to avoid undefined variable warning
        $employeeType = ''; // Initialize $employeeType

        if (isset($_POST['check'])) {
            $taskType = $_POST['taskType'];

            foreach ($data['task'] as $row) {
                if ($row->taskType == $taskType) {
                    $employeeType = $row->employeeType;
                    break; // Break loop once employeeType is found
                }
            }

            $data['available'] = [];
            foreach ($data['employee'] as $row) {
                if ($row->empRoll == $employeeType) {
                    $empName = $row->empName;
                    foreach ($data['employeetask'] as $row2) {
                        if (
                            $row2->assignEmployee == $empName && $row2->date == $_POST['date'] && ($row2->endTime >= $_POST['startTime'] && $row2->startTime <= $_POST['endTime']) ||
                            ($_POST['endTime'] >= $row2->startTime && $_POST['startTime'] <= $row2->endTime)
                        ) {
                            echo "Employee is not available";
                            break;
                        } else {
                            $data['available'][] = $empName;
                            show($data['available']);
                        }
                    }
                }
            }

            $temp1 = [
                'taskType' => $taskType,
                'date' => $_POST['date'] ?? '', // Use null coalescing operator to avoid errors if $_POST['date'] is not set
                'startTime' => $_POST['startTime'] ?? '',
                'endTime' => $_POST['endTime'] ?? ''
            ];

            $data['temp1'] = $temp1;

            if (isset($_POST['submit'])) {
                // show($_POST);

                $insertData = [
                    'taskType' => $_POST['taskType'],
                    'date' => $_POST['date'],
                    'startTime' => $_POST['startTime'],
                    'endTime' => $_POST['endTime'],
                    'assignEmployee' => $_POST['assignEmployee'],
                    'location' => $_POST['location']
                ];
                // $employeeTask->insert($insertData);
                // Handle form submission or validation here
                // Avoid using show($_POST) in production code
            }

            $this->view('admin/assignTask', $data);
        }
    }
}
