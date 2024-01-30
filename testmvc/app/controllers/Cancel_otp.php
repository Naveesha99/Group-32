<?php 

/**
 * cancel_otp class
 */
class Cancel_otp
{
	use Controller;

	public function index()
	{
		$data = [];

		$this->view('/ticket_booking/cancel_otp', $data);
	}

}

