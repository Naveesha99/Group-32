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

		// if($_SERVER['REQUEST_METHOD'] == 'POST'){
		// 	$taskId = $_POST['taskId'];
		// 	$status = $_POST['status'];

			
		// 	$empTask = new EmployeeTask;
		// 	if($taskId){
		// 		$arr1['id'] = $taskId;
		// 		$reqData = $empTask->where($arr1);
		// 		show($reqData);
		// 		if($reqData){
		// 			$task = $reqData;
		// 		}
		// 	}

		// 	if($task){
		// 		$arrNew['status'] = $status;
		// 		$empTask->update($taskId, $arrNew, 'id');
				
		// 		redirect('EmployeeDashboard');
		// 	}else{
				
		// 		redirect('error');
		// 	}
		// }





		$this->view('employee/employeeDashboard', $data);
	}

	
	
}
