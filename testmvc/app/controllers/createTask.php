<?php 

/**
 * home class
 */
class createTask
{
	use Controller;

	public function index()
	{
		$data = [];

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$task = new Task;
			show($_POST);
			if($task->validate($_POST)) {
				$_POST['status'] = 'pending';
				
				$task->insert($_POST);
				redirect('adminemployee');
			}
			$data['errors'] = $task->errors;
		}

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('admin/createTask', $data);
	}

}