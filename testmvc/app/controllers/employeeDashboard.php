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
		$emp_task = new EmployeeTask;
		$result = [];

		if ($empId) {
			$arr1['empId'] = $empId;
			$empData = $emp_task->where($arr1);
			if ($empData) {
				$result = $empData;
			}
		}
		if ($empData != null) {
			$data['employee'] = $empData;


			$today_tasks = [];
			$future_tasks = [];

			$currentDate = date('Y-m-d');

			foreach ($result as $row) {
				if ($row->date == $currentDate) {
					$today_tasks[] = $row;
				}

				if ($row->date > $currentDate) {
					$future_tasks[] = $row;
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
			$data['future_tasks'] = $future_tasks;
		} else {
			$data['to_do'] = 0;
			$data['completed'] = 0;
			$data['today_tasks'] = [];
			$data['future_tasks'] = [];
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (isset($_POST['complete_task'])) {
				$articleId = $_POST['complete_task'];
				$this->articleComplete($articleId, $emp_task);
			}
		}



		if ($_SESSION['USER']->user_type == 'Employee') {
			$this->view('employee/employeeDashboard', $data);
		}
	}

	private function articleComplete($data, $emp_task)
	{
		$arrN['id'] = $data;
		$articleData = $emp_task->where($arrN);
		if ($articleData[0]->status == 'To do') {
			$articleData[0]->status = "completed";
		}
		$emp_task->update($data, (array)$articleData[0], 'id');
		redirect("employeeDashboard");
	}
}
