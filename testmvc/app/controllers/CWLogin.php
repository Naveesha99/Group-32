<?php

/**
 * cw login class
 */
class CWLogin
{
	use Controller;

	public function index()
	{
		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$cw = new Content_writers;
			$arr['username'] = $_POST['username'];

			$row = $cw->first($arr);

			if ($row) {
				if ($row->password == $_POST['password']) {
					$_SESSION['USER'] = $row;
					redirect('contentwriter/cwDashboard');
				}
			}

			$cw->errors['username'] = "Wrong username or password";

			$data['errors'] = $cw->errors;
		}

		$this->view('contentwriter/cwLogin', $data);
	}
}
