<?php

/**
 * Select_drama Class
 */

class Select_drama
{
	use Controller;
	public function index()
	{

				// show($_POST);
		if (!isset($_POST['id'])) 
		{
			redirect('home');
		}

		$dramaData = $this->eachDrama($_POST['id']);

		$data['data'] = $dramaData;

		$this->view('/ticket_booking/select_drama', $data);
	}

	private function eachDrama($id)
	{
		$home  = new Homes();
		$arr['id'] = $id;
		$data = $home->where($arr);
		return $data;	
	}

	private function get_time_byid()
	{
		$drama_time = new Drama_time();
		$row = $drama_time->findAll();
		// foreach ($row as $key)
		// {			
		// 	unset($key->title);
		// 	unset($key->description);
		// }
		// show($row);
		return $row;
	}

	private function time_id($dates, $id)
	{
		$booking = new Booking();

		$arr['date'] = $dates;
		$arr['drama_id'] = $id;

		$dates = $booking->where($arr);
		$timestamp = strtotime($dates[0]->time);

		// Format the timestamp as "h:mm:ss AM/PM"
		$formattedTime = date("g:i A", $timestamp);

		return $formattedTime;
	}
}