<?php

/**
 * home class
 */
class Addseats
{
    use Controller;

    public function index()
    {
        $data = [];
        
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{

			$home = new Homes;
            $booking = new Booking;
            $price = new Price;

			
            

                $data['title'] = $_POST['title'];
                $data['description'] = $_POST['description'];
                $data['image'] = $_POST['image'];


            if($home->validate($data))
            {
                //_______add drama into home table_________
                $arr['title'] = $_POST['title'];
                $arr['description'] = $_POST['description'];
                $arr['image'] = $_POST['image'];
				$home->insert($arr);

                //_______find drama_id from homes table____
                $details = $home->where($arr);
                $arr2['drama_id'] = $details[0]->id;
                $arr2['date'] = $_POST['date'];

                //________change format of the Time_________
                $timestamp = strtotime($_POST['time']);
                $formattedTime = date("H:i:s", $timestamp);
                $arr2['time'] = $formattedTime;

                //___add date and time into b_time table____
                $booking->insert($arr2);


                //_______add price relevant drama_id________
                $arr3['drama_id'] = $details[0]->id;
                $arr3['t_type'] = 'Normal';
                $arr3['t_price'] = $_POST['price'];
                $price->insert($arr3);

                
                //___add 80 seats relevant times and dates__
                if($formattedTime<='12:00:00')
                {
                    $timeslot1 = new Timeslot1;
                    for($i=1; $i<81; $i++)
                    {
                        $data['drama_id'] = $details[0]->id;
                        $data['date'] = $_POST['date'];
                        $data['time'] = $formattedTime;
                        $data['seat_id'] = 'A'.$i;
                        $data['status'] = 'free';

                        $timeslot1->insert($data);
                    }
                }
                else if($formattedTime<='18:00:00')
                {
                    $timeslot2 = new Timeslot2;
                    for($i=1; $i<81; $i++)
                    {
                        $data['drama_id'] = $details[0]->id;
                        $data['date'] = $_POST['date'];
                        $data['time'] = $formattedTime;
                        $data['seat_id'] = 'A'.$i;
                        $data['status'] = 'free';

                        $timeslot2->insert($data);
                    }
                }
                else
                {
                    $timeslot3 = new Timeslot3;
                    for($i=1; $i<81; $i++)
                    {
                        $data['drama_id'] = $details[0]->id;
                        $data['date'] = $_POST['date'];
                        $data['time'] = $formattedTime;
                        $data['seat_id'] = 'A'.$i;
                        $data['status'] = 'free';

                        $timeslot3->insert($data);
                    }
                }
            }
            else
            {
                $data['errors'] = $home->errors;   
            }
            
           

		}

		$this->view('/ticket_booking/addseats', $data);
    }
}
