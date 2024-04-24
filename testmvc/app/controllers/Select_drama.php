<?php
header("Cache-Control: no-cache");
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

		$_SESSION['id'] = $_POST['id'];

		$dramaData = $this->eachDrama($_SESSION['id']);
		$data['data'] = $dramaData;

		$dramaTime = $this->drama_times($_SESSION['id']);
		$data['tms'] = $dramaTime;
		// show($data['tms']);

		$this->view('/ticket_booking/select_drama', $data);
	}

	private function eachDrama($id)
	{
		$home  = new Homes();
		$arr['id'] = $id;
		$data = $home->where($arr);
		return $data;	
	}

	private function drama_times($id)
	{
		$booking = new Booking;
		$arr['drama_id'] = $id;
		$rows = $booking->where($arr);

		if($rows != '')
		{
			return $rows;
		}
		else
		{
			return 0;
		}
	}

}