<?php 

/**
 * login class
 */
class ReservaProfileEdit
{
	use Controller;

	public function index()
	{
		$data = [];
		
		

		$this->view('reservaProfileEdit',$data);
	}

}
