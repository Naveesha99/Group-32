<?php 

/**
 * home class
 */
class addDrama
{
	use Controller;

	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page.
			redirect('login');
			exit();
		}

		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$drama = new Drama;
			show($_POST);
            if ($drama->validate($_POST)) {
                $drama->insert($_POST);
                redirect('dramas');
            } else {

                echo "Drama not found.";
                exit();
            }
        }

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('admin/adddrama');
	}

}