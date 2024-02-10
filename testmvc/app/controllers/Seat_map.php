<?php 

/**
 * Seat_map class
 */
class Seat_map
{
	use Controller;

	public function index()
	{
        $this->view('/ticket_booking/seat_map');
	}
}

