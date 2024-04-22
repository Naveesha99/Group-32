<?php

class assignTask
{
    use Controller;

    public function index()
    {
        $task = new Task;
        $employee = new Employee;
        $data['task'] = $task->findAll();
        $data['employee'] = $employee->findAll();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // show($_POST);
            $taskType = $_POST['taskType'];
            foreach($data['task'] as $row){
                if($row->taskType == $taskType){
                    $employeeType = $row->employeeType;
                }
            }
            foreach($data['employee'] as $row){
                if($row->empRoll == $employeeType){
                    $empName = $row->empName;
                    $data['available'][] = $empName;
                }
            }
        }
        
        $this->view('admin/assignTask',$data);
    }
}
