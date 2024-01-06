<?php 


class ReservaHall1
{
	use Controller;

	public function index()
	{

		$data = [];
		$this->view('reservaHall1',$data);
	}

}
