<?php 


class ReservaSentReq
{
	use Controller;

	public function index()
	{

		$data = [];
		$this->view('reservaSentReq',$data);
	}

}
