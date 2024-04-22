<?php 
header("Cache-Control: no-cache");

/**
 * Seat_map class
 */
class Seat_map
{
	use Controller;

	public function index()
	{
		
		if(isset($_POST['drama_id']) && isset($_POST['time']) && isset($_POST['date']))
		{
            $_SESSION['drama_id'] = $_POST['drama_id'];
            $_SESSION['time'] = $_POST['time'];
            $_SESSION['date'] = $_POST['date'];

		$row1 = $this->get_price_byid($_SESSION['drama_id']);
		$data['get_price'] = $row1;

		$seat_data = $this->seat_status($_SESSION['date'], $_SESSION['time'], $_SESSION['drama_id']); //data coming from select_drama page
		$data['get_seat'] = $seat_data;
		// show($data['get_price']);
			$arr['id'] =  $_SESSION['drama_id'];
		$homes = new Homes;
		$data['row'] = $homes->first($arr);
		
        $this->view('/ticket_booking/seat_map', $data);
		}
	}


private function get_price_byid($drama_id)
	{
		$price = new Price();

		$arr['drama_id']=$drama_id;
		$row1 = $price->where($arr);

		foreach ($row1 as $key)
		{			
			unset($key->t_type);
		}
		return $row1;
	}


	private function seat_status($dates, $times, $ids)
	{
		if($times<='12:00:00')
		{
			$timeslot1 = new Timeslot1();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot1->where($arr);
			$result =['data'=>$data,'table'=>'table1'];
			return $result;
		}

		else if($times<='18:00:00')
		{
			$timeslot2 = new Timeslot2();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot2->where($arr);
			
			$result =['data'=>$data,'table'=>'table2'];
			return $result;
		}

		else if($times<='23:00:00')
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
