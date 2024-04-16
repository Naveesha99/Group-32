<?php 

/**
 * home class
 */
class ContactUs
{
	use Controller;
	public function index()
	{
		if(isset($_SESSION['USER'])){
			show($_SESSION['USER']->username);
		}

		$data = [];
		$this->view('contactUs',$data);
	}
}