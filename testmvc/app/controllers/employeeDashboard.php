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
			redirect('login');
			exit();
		}
		$empId = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;

		$data = [];
		$emp_task = new Emp_tasks;
		$result = [];

		if ($empId) {
			$arr1['emp_id'] = $empId;
			$empData = $emp_task->where($arr1);
			if ($empData) {
				$result = $empData;
			}
		}
		if ($empData != null) {
			$data['employee'] = $empData;


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
		}else{
			$data['to_do'] = 0;
			$data['completed'] = 0;
			$data['today_tasks'] = [];
		}



		// show($data);

		$this->view('employee/employeeDashboard', $data);
	}
}
