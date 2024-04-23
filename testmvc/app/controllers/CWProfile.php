<?php

/**
 *  content writer profile
 */
class CWProfile
{
	use Controller;

	public function index()
	{
		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('cwLogin');
			exit();
		}

		$cwId = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;

		$emp = new Content_writers;
		$profile =  new Profiles;

		if($cwId){
			$arr1['id'] =$cwId;
			$empData = $emp ->where($arr1);
			if($empData){
				$result = $empData;
			}
		}
		$result = $emp->findAll();

		$data['content_writer'] = $result;

		$this->view('contentwriter/cwProfile', $data);
	}
}
