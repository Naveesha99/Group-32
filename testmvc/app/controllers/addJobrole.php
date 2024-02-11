<?php 

/**
 * home class
 */
class addJobrole
{
	use Controller;

	public function index()
	{

		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$jobs = new jobs;
			if($jobs->validate($_POST))
			{
				$jobs->insert($_POST);
				redirect('admin/adminemployee');
			}

			$data['errors'] = $jobs->errors;			
		}

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('admin/addjobrole');
	}

}