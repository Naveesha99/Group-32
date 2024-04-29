<?php

/**
 * home class
 */
class addEmployee
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

		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$employee = new Employee;
			$user = new User;
			// show($_POST);
			if ($employee->validate($_POST)) {
				$hashedPassword = password_hash($_POST['empNIC'], PASSWORD_DEFAULT);
				$_POST['password'] = $hashedPassword;
				// show($_POST);
				$email = $_POST['empEmail'];
				$name = $_POST['empName'];
				$sendMail = new SendMail;
				$sendMail->sendEmployeeEmail($email, $name);
				if ($_POST['empRoll'] == 'Front Desk Officer') {
					$loginData = [
						'fullname' => $_POST['empName'],
						'email' => $_POST['empEmail'],
						// 'nic'=>$_POST['empNIC'],
						'password' => $hashedPassword,
						// 'dob'=>$_POST['empDOB'],
						'user_type' => 'Front Desk Officer'
					];
				} elseif ($_POST['empRoll'] == 'Content Writer') {
					$loginData = [
						'fullname' => $_POST['empName'],
						'email' => $_POST['empEmail'],
						// 'nic'=>$_POST['empNIC'],
						'password' => $hashedPassword,
						// 'dob'=>$_POST['empDOB'],
						'user_type' => 'Content Writer'
					];
				} else {
					$loginData = [
						'fullname' => $_POST['empName'],
						'email' => $_POST['empEmail'],
						// 'nic'=>$_POST['empNIC'],
						'password' => $hashedPassword,
						// 'dob'=>$_POST['empDOB'],
						'user_type' => 'Employee'
					];
				}
				// show($loginData);
				$arr1['email'] = $_POST['empEmail'];
				$result = $user->first($arr1);
				if ($result) {
					$data['errors']['exist'] = 'Email already exists';
				} else {
					if ($employee->validate($_POST)) {
						$employee->insert($_POST);
						$user->insert($loginData);
						redirect('adminemployee');
					}
				}
			} else {
				$data['errors'] = $employee->errors;
			}
		}


		$jobs = new Jobs;
		$result = $this->jobRole($jobs);

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$data['role'] = $result;
		//show($data);
		if($_SESSION['USER']->user_type == 'admin'){
		$this->view('admin/addEmployee', $data);
		}
	}

	// private function showJobs($jobs) {
	// 	$result = $jobs->findAll();
	// 	$data['jobs'] = $result;
	// 	$this->view('addemployee', $data);
	// }

	private function jobRole($jobs)
	{
		$result = $jobs->findAll();
		foreach ($result as $key) {

			unset($key->startTime);
			unset($key->endTime);
			unset($key->salary);
			unset($key->id);
			unset($key->jobSummary);
		}
		// show($result);
		return $result;
		// $data['jobs'] = $result;
		// $this->view('addemployee', $data);
	}
}
