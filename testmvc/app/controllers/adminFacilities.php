<?php

/**
 * home class
 */
class adminFacilities
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
		$facilities = new Facilities;
		$result['facility'] = $facilities->findAll();
		$data['facility'] = $result['facility'];

		$this->view('admin/adminFacilities', $data);
	}
	
	public function updateFacilities($data){
		$name=$data['name'];
		$icon=$data['icon'];
		$arrOrder = [  
			'name' => $name
			,'icon' => $icon 
		]; 

		$facilities = new Facilities;
		$facilities->update($data['id'], $arrOrder);

	}


}
