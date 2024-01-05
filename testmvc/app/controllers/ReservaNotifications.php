<?php 


class ReservaNotifications
{
	use Controller;

	public function index()
	{

		$data = [];
		$this->view('reservaNotifications',$data);
	}

}
