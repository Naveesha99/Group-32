<?php 

/**
 * login class
 */
class Login
{
	use Controller;

	public function index()
	{
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new User;
			$arr['username'] = $_POST['username'];

			$row = $user->first($arr);
			
			if($row)
			{
				if($row->password === $_POST['password'])
				{
					$_SESSION['USER'] = $row;
					redirect('admindashboard');
				}
			}

			$user->errors['username'] = "Wrong username or password";

			$data['errors'] = $user->errors;
		}

		$this->view('login',$data);
	}

}
