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
            redirect('empLogin');
            exit();
        }

        // $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;
        $data = [];
        $emp_task = new Emp_tasks;
        $result = $emp_task->findAll();

        $historyTasks = [];
        $currentDate = date('Y-m-d');

        foreach ($result as $row) {
            if ($row->relavant_date < $currentDate) {
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

        $this->view('employee/empHistory', $data);
    }
}
