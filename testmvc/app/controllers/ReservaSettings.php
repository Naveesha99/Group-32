<?php 


class ReservaSettings
{
	use Controller;

	public function index()
	{

		$data = [];
		$this->view('reservaSettings',$data);
	}

}
