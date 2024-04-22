<?php

/**
 * home class
 */
class Addtimes
{
    use Controller;

    public function index()
    {
        $data = [];

        $home = new Homes;
        $booking = new Booking;
        $t_prices = new Price;

        $rows = $home->findAll();
        $data['home_data'] = $rows;

        if($_POST)
        {
            if($_POST['drama_id']!=='' && $_POST['date']!=='' && $_POST['time']!=='' && $_POST['price']!=='')
            {
                $timestamp = strtotime($_POST['time']);
                $formattedTime = date("H:i:s", $timestamp);

                // ____If alredy included this time for this drama___
                $arr1['drama_id'] = $_POST['drama_id'];
                $arr1['date'] = $_POST['date'];
                $arr1['time'] = 
                $included = $booking->first($arr1);

                if($included=='')
                {
                    // ___add date and time into b_time table____
                    $arr2['time'] = $formattedTime;
                    $arr2['drama_id'] = $_POST['drama_id'];
                    $arr2['date'] = $_POST['date'];
                    $booking->insert($arr2);

                    $arr3['drama_id'] = $_POST['drama_id'];
                    $arr3['t_type'] = 'Normal';
                    $arr3['t_price'] = $_POST['price'];
                    $t_prices->insert($arr3);

                    $row = $this->addtimes($_POST['drama_id'], $_POST['time'], $_POST['date']);
                    $data['row'] = $row;
                }
                else
                {
                    $data['invalid'] = 'Already added this time....!.';
                }
                
            }
            else
            {
                $data['invalid'] = 'All data are required, please enter the all data.';
                // echo 'invalid';
            }
        }
       
        
		$this->view('/ticket_booking/addtimes', $data);
    }

    private function addtimes($drama_id, $time, $date)
    {
        $booking = new Booking;

        // ________change format of the Time___________
                $timestamp = strtotime($time);
                $formattedTime = date("H:i:s", $timestamp);


        // ___add 80 seats relevant times and dates___
                if($formattedTime<='12:00:00')
                {
                    $timeslot1 = new Timeslot1;
                    for($i=1; $i<81; $i++)
                    {
                        $data['drama_id'] = $drama_id;
                        $data['date'] = $date;
                        $data['time'] = $formattedTime;
                        $data['seat_id'] = 'A'.$i;
                        $data['status'] = 'free';

                        $timeslot1->insert($data);
                    }
                    $data['success'] = "Successfully added seats.";
                    return $data['success'];
                }
                else if($formattedTime<='18:00:00')
                {
                    $timeslot2 = new Timeslot2;
                    for($i=1; $i<81; $i++)
                    {
                        $data['drama_id'] = $drama_id;
                        $data['date'] = $date;
                        $data['time'] = $formattedTime;
                        $data['seat_id'] = 'A'.$i;
                        $data['status'] = 'free';

                        $timeslot2->insert($data);
                    }
                    $data['success'] = "Successfully added seats.";
                    return $data['success'];
                }
                else
                {
                    $timeslot3 = new Timeslot3;
                    for($i=1; $i<81; $i++)
                    {
                        $data['drama_id'] = $drama_id;
                        $data['date'] = $date;
                        $data['time'] = $formattedTime;
                        $data['seat_id'] = 'A'.$i;
                        $data['status'] = 'free';

                        $timeslot3->insert($data);
                    }
                    $data['success'] = "Successfully added seats.";
                    return $data['success'];
                }
    }
}
