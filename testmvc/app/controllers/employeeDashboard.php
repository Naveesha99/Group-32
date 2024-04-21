<?php

/**
 * home class
 */
class EmployeeDashboard
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
		// $data = $result;

		$today_tasks = [];

		$currentDate = date('Y-m-d');

		foreach ($result as $row) {
			if ($row->relavant_date == $currentDate) {
				$today_tasks[] = $row;
			}
		}

		$todoCount = 0;
		$completedCount = 0;

		foreach ($today_tasks as $task) {
			if ($task->status == 'To do') {
				$todoCount++;
			} elseif ($task->status == 'Completed') {
				$completedCount++;
			}
		}

		$data['to_do'] = $todoCount;
		$data['completed'] = $completedCount;
		$data['today_tasks'] = $today_tasks;

		// show($data);

		$this->view('employee/employeeDashboard', $data);
	}
}
