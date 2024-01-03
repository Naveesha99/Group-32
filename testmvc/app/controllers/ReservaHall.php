<?php 


class ReservaHall
{
	use Controller;

	public function index()
	{

		$data = [];
		$this->view('reservaHall',$data);
	}

}
