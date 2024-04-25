<?php

/**
 * home class
 */
class adminDashboard
{
	use Controller;

	public function index()
	{
		// Check if the user is logged in
		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('login');
			exit();
		}
		$employee = new Employee;
		$result['employee'] = $employee->findAll();
		$data['employee'] = $result['employee'];

		$request = new Reservationrequests;
		$result['request'] = $this->status($request);
		$pending = 0;
		$accepted = 0;
		$rejected = 0;
		if (!empty($result['request'])) {
			foreach ($result['request'] as $item) {
				$status = $item->status;
				if ($status == 'pending') {
					$pending++;
				}elseif ($status == 'accepted') {
					$accepted++;
				}elseif ($status == 'rejected') {
					$rejected++;
				}
		}
		$data['status_counts'] = [
			'pending' => $pending,
			'accepted' => $accepted,
			'rejected' => $rejected
		];
		}

		$order = new Orders;
		$result['order'] = $order->findAll();
		// show($result['order']);
		$months = [];
		foreach ($result['order'] as $order) {
			$date = $order->drama_date;
			$month = date('F', strtotime($date));
			$months[] = $month;
		}
		$payments = [];
		foreach ($result['order'] as $order) {
			$date = $order->drama_date;
			$month = date('F', strtotime($date));
			$payment = $order->payment;
			if (!isset($payments[$month])) {
				$payments[$month] = 0;
			}
			$payments[$month] += $payment;
		}
		$data['payments'] = $payments;

		// Assuming you have a User model with a method to fetch user data
		// $userModel = new user(); // Replace with your actual User model
		// $user = $userModel->getUserByEmail($_SESSION['USER']->email);

		// $data['username'] = empty($user) ? 'User' : $user->email;

		//show($_SESSION['USER']);
		$this->view('admin/admindashboard', $data);
	}

	private function status($request)
	{
		$result = $request->findAll();
		foreach ($result as $key) {
			unset($key->id);
			unset($key->hallno);
			unset($key->name);
			unset($key->date);
			unset($key->startTime);
			unset($key->endTime);
			unset($key->hours);
			unset($key->headCount);
			unset($key->sounds);
			unset($key->standings);
			unset($key->message);
			unset($key->amount);
			unset($key->reservationistId);
		}
		// show($result);
		return $result;
	}
}
