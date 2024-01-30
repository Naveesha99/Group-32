<?php 

/**
 * cancellation class
 */
class Cancellation
{
	use Controller;

	public function index()
	{
		$data = [];

		$this->view('/ticket_booking/cancellation', $data);
	}

}

