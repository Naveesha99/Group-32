<?php 

/**
 * Seat_map class
 */
class Seat_map
{
	use Controller;

	public function index()
	{

		$row1 = $this->get_price_byid();
		$data['get_price'] = $row1;

		$seat_data = $this->seat_status($_POST['date'], $_POST['time'], $_POST['drama_id']);
		$data['get_seat'] = $seat_data;
		// show($data['get_price']);

        $this->view('/ticket_booking/seat_map', $data);
	}


private function get_price_byid()
	{
		$price = new Price();
		$row1 = $price->findAll();

		foreach ($row1 as $key)
		{			
			unset($key->t_type);
		}
		return $row1;
	}


	private function seat_status($dates, $times, $ids)
	{
		if($times=='09:00:00')
		{
			$timeslot1 = new Timeslot1();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot1->where($arr);
			$result =['data'=>$data,'table'=>'table1'];
			return $result;
		}

		else if($times=='11:00:00')
		{
			$timeslot2 = new Timeslot2();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot2->where($arr);
			
			$result =['data'=>$data,'table'=>'table2'];
			return $result;
		}

		else if($times=='4:00:00')
		{
			$timeslot3 = new Timeslot3();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot3->where($arr);
			
			$result =['data'=>$data,'table'=>'table3'];
			return $result;
		}
		else
		{
			echo'Not Available';
		}
	}
}
