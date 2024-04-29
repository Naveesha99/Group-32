<?php

/**
 * task history class
 */

class EmpHistory
{
    use Controller;

    public function index()
    {
        if (empty($_SESSION['USER'])) {
            // Redirect or handle the case when the user is not logged in
            // For example, you might want to redirect them to the login page
            redirect('login');
            exit();
        }

        $empId = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;
        $data = [];
        $result = [];
        $emp_task = new EmployeeTask;

        if ($empId) {
            $arr1['empID'] = $empId;
            $empData = $emp_task->where($arr1);
            if ($empData) {
                $result = $empData;
            }
        }

        $historyTasks = [];
        $currentDate = date('Y-m-d');

        foreach ($result as $row) {
            if ($row->date < $currentDate) {
                $historyTasks[] = $row;
            }
        }

        $total = count($historyTasks);
        $completedCount = 0;

        foreach ($historyTasks as $task) {
            if ($task->status == 'Completed') {
                $completedCount++;
            }
        }

        $data['total'] = $total;
        $data['completed'] = $completedCount;
        $data['historyTasks'] = $historyTasks;
        if ($_SESSION['USER']->user_type == 'Employee') {
            $this->view('employee/empHistory', $data);
        }
    }
}
