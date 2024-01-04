<?php 


class ReservaReq
{
	use Controller;

	public function index()
	{

		$data = [];
		$this->view('reservaReq',$data);
	}

}
