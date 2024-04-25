<?php
header("Cache-Control: no-cache");

/**
 * home class
 */
class scheduleDrama
{
    use Controller;

    public function index()
    {
        $data = [];

        $homes = new Homes;

        $row =$homes->findAll();
        $data['home_data'] = $row;

        $rows1 = $this->check_time_has_next_7_days();
        $data['all_days'] = $rows1;


        //____(2)_________________Add Time Slots into time1 time2 and time3_______________________
        if(isset($_POST['pst_available_data']) && isset($_POST['pst_drama_id']) && isset($_POST['pst_title']) && isset($_POST['pst_price'])) 
        {
            $t_prices = new Price;

            $id = $_POST['pst_drama_id'];
            $d_title = $_POST['pst_title'];
            $d_price = $_POST['pst_price'];
            $available_data = json_decode($_POST['pst_available_data'], true);       // Decode the JSON data

            //_________Add Price__________
            $arr9['drama_id'] = $id;
            $arr9['t_type'] = 'Normal';
            $arr9['t_price'] = $d_price;
            $t_prices->insert($arr9);


            if(isset($_POST['pst_time1']) && !isset($_POST['pst_time2'])) //time1 only (3:30 PM)
            {
                $time1 = $_POST['pst_time1'];
                foreach($available_data as $date)
                {
                    $row1 = $this->addtimes($id, $time1, $date);
                    $data['invalid1'] = $row1;

                    $row2 = $this->insert_times_into_b_times($id, $date, $time1, $d_title);
                    $data['invalid2'] = $row2;
                }
            }
            else if(!isset($_POST['pst_time1']) && isset($_POST['pst_time2']))
            {
                $time2= $_POST['pst_time2'];
                foreach($available_data as $date)
                {
                    $row1 = $this->addtimes($id, $time2, $date);
                    $data['invalid1'] = $row1;

                    $row2 = $this->insert_times_into_b_times($id, $date, $time2, $d_title);
                    $data['invalid2'] = $row2;

                }
            }
            else if(isset($_POST['pst_both_time1']) && isset($_POST['pst_both_time2']))
            {
                $b_time1 = $_POST['pst_both_time1'];
                $b_time2 = $_POST['pst_both_time2'];

                foreach($available_data as $date)
                {
                    $row1 = $this->addtimes($id, $b_time1, $date);
                    $data['invalid1'] = $row1;

                    $row2 = $this->insert_times_into_b_times($id, $date, $b_time1, $d_title);
                    $data['invalid2'] = $row2;
                }

                foreach($available_data as $date)
                {
                   $row3 =  $this->addtimes($id, $b_time2, $date);
                   $data['invalid1'] = $row3;

                    $row4 = $this->insert_times_into_b_times($id, $date, $b_time2, $d_title);
                    $data['invalid2'] = $row4;
                }
            }
        }
        else
        {
            $data['no_enough_data'] = 'Not enough data to add seats';
        }


        //_____(3)_______________Data come from input fields (VALIDATIONS AND FILTER DATA FROM b_time)_______________________________
        if(isset($_POST['drama-id']))
        {
            if(isset($_POST['title']) && $_POST['title'] == '')
            {
                $data['not_drama'] = 'Select the drama to add time or times';
            }
            if($_POST['start_date'] == '' || $_POST['end_date'] =='')
            {
                $data['not_date'] = 'select the both drama starting date and end date';
            }
            if(isset($_POST['start_date']) && isset($_POST['end_date']))
            {
                $today = new DateTime(); // Get today's date as DateTime object
                $start_date_new = new DateTime($_POST['start_date']);
                $end_date_new = new DateTime($_POST['end_date']);

                if($start_date_new > $end_date_new)
                {
                    $data['invalid_range'] = 'select the valid date range';
                }
                
                if($start_date_new < $today)
                {
                    $data['old_date'] = 'You have selected OLD DATE RANGE';
                }
            }
            if((!isset($_POST['time1']) && !isset($_POST['time2'])))
            {
                $data['not_time'] = 'Select  drama time or times';
            }
            if($_POST['price'] == '')
            {
                $data['not_price'] = 'Price should be not null';
            }
            




            if(isset($_POST['title']) && $_POST['title']!='') 
            {
                // show($_POST['drama-id']);
                // show($_POST['title']);
                $data['title'] = $_POST['title'];
                $data['drama_id'] = $_POST['drama-id'];

                $today = new DateTime(); // Get today's date as DateTime object
                $start_date_new = new DateTime($_POST['start_date']);
                $end_date_new = new DateTime($_POST['end_date']);

                if($_POST['start_date'] !='' && $_POST['end_date'] != '' &&  $start_date_new <= $end_date_new  &&  $start_date_new >= $today)
                {
                    if(isset($_POST['price']) && $_POST['price'] >0)
                    { 
                            $data['price'] = $_POST['price'];
                            if(isset($_POST['time1']) || isset($_POST['time2']))
                            {
                                    
                                if(isset($_POST['time1']) && !isset($_POST['time2']))
                                {
                                    // echo 'ishanchasmdad';
                                    $books = new Booking;
                                    $details = $books->findAll();

                                    $booked_days = [];
                                    $avai_days = [];

                                    $s_date = new DateTime($_POST['start_date']);
                                    $e_date = new DateTime($_POST['end_date']);
                                    $all_days = [];

                                    $current_date = clone $s_date; // Clone the start date to avoid modifying it

                                    // Loop from start date to end date, including end date
                                    while ($current_date <= $e_date) 
                                    {
                                        $all_days[] = $current_date->format('Y-m-d'); // Store the current date in the array
                                        $current_date->modify('+1 day'); // Move to the next day
                                    }

                                    foreach ($all_days as $day) 
                                    {
                                        // Check if the day is in the details array
                                        $found = false;
                                        foreach ($details as $detail) 
                                        {
                                            if ($detail->date == $day) 
                                            {
                                                $booked_days[] = $day;
                                                $found = true;
                                                break; // No need to continue searching if found
                                            }
                                        }
                                        // If the day wasn't found in details, add it to available days
                                        if (!$found) 
                                        {
                                            $avai_days[] = $day;
                                        }
                                    }
        
                                    $data5['available'] = $avai_days;
                                    $data5['booked'] = $booked_days;
                                    $data5['input_time1'] = $_POST['time1'];
                                    $data['title'] = $_POST['title'];
                                    // $data['drama_id'] = $_POST['drama-id'];
                                    

                                    $data['filt_date'] =$data5;
                                    // return $data5;
                                }
                                else if(!isset($_POST['time1']) && isset($_POST['time2']))
                                {
                                    $booked_days = [];
                                    $avai_days = [];

                                    $books = new Booking;
                                    $details = $books->findAll();


                                    $s_date = new DateTime($_POST['start_date']);
                                    $e_date = new DateTime($_POST['end_date']);
                                    $all_days = [];

                                    $current_date = clone $s_date; // Clone the start date to avoid modifying it
                                    while ($current_date <= $e_date) 
                                    {
                                        // Add the current date to the array of all days
                                        $all_days[] = $current_date->format('Y-m-d');
                                        // Move to the next day
                                        $current_date->modify('+1 day');
                                    }

                                    foreach ($all_days as $day) 
                                    {
                                        // Check if the day is in the details array
                                        $found = false;
                                        foreach ($details as $detail) 
                                        {
                                            if ($detail->date == $day) 
                                            {
                                                $booked_days[] = $day;
                                                $found = true;
                                                break; // No need to continue searching if found
                                            }
                                        }
                                        // If the day wasn't found in details, add it to available days
                                        if (!$found) 
                                        {
                                            $avai_days[] = $day;
                                        }
                                    }
                                    $data5['available'] = $avai_days;
                                    $data5['booked'] = $booked_days;
                                    $data5['input_time2'] = $_POST['time2'];

                                    $data['filt_date'] =$data5;
                                    $data['title'] = $_POST['title'];
                                    // $data['drama_id'] = $_POST['drama-id'];
                                }
                                else if(isset($_POST['time1']) && isset($_POST['time2']))
                                {
                                    $booked_days = [];
                                    $avai_days = [];

                                    $books = new Booking;
                                    $details = $books->findAll();


                                    $s_date = new DateTime($_POST['start_date']);
                                    $e_date = new DateTime($_POST['end_date']);
                                    $all_days = [];

                                    $current_date = clone $s_date; // Clone the start date to avoid modifying it
                                    while ($current_date <= $e_date) 
                                    {
                                        // Add the current date to the array of all days
                                        $all_days[] = $current_date->format('Y-m-d');
                                        // Move to the next day
                                        $current_date->modify('+1 day');
                                    }

                                    foreach ($all_days as $day) 
                                    {
                                        // Check if the day is in the details array
                                        $found = false;
                                        foreach ($details as $detail) 
                                        {
                                            if ($detail->date == $day) 
                                            {
                                                $booked_days[] = $day;
                                                $found = true;
                                                break; // No need to continue searching if found
                                            }
                                        }
                                        // If the day wasn't found in details, add it to available days
                                        if (!$found) 
                                        {
                                            $avai_days[] = $day;
                                        }
                                    }
                                    $data5['available'] = $avai_days;
                                    $data5['booked'] = $booked_days;
                                    $data5['input_time1'] = $_POST['time1'];
                                    $data5['input_time2'] = $_POST['time2'];
                                    $data['title'] = $_POST['title'];
                                    // $data['drama_id'] = $_POST['drama-id'];

                                    $data['filt_date'] =$data5;
                                    // return $data5;
                                }
                            }
                    }
                }

            } 
        } 
		$this->view('admin/scheduledrama', $data);
    }




    // _______________________________________FUNCTIONS____________________________________________________________
    private function check_time_has_next_7_days()
    {
        $id_array = [];
        $title_array = [];

        // $home = new Homes;
        $booking = new Booking;

        // $get_ids = $home->findAll();
        $check_ids = $booking->findAll();

                        $today = date('Y-m-d');
                        $nextDate1 = date('Y-m-d', strtotime("+0 day", strtotime($today)));
                        $nextDate2 = date('Y-m-d', strtotime("+1 day", strtotime($today)));
                        $nextDate3 = date('Y-m-d', strtotime("+2 day", strtotime($today)));
                        $nextDate4 = date('Y-m-d', strtotime("+3 day", strtotime($today)));
                        $nextDate5 = date('Y-m-d', strtotime("+4 day", strtotime($today)));
                        $nextDate6 = date('Y-m-d', strtotime("+5 day", strtotime($today)));
                        $nextDate7 = date('Y-m-d', strtotime("+6 day", strtotime($today)));

            foreach($check_ids as $y)
            {
                $db_date = $y->date;
                $db_time = $y->time;

                if($db_date >= $today)
                {
                    $days_array[] = $y;
                    // $times_array[] = $db_time;
                }
            }
        return $days_array;
    }


    private function find_all_times($rows1)
    {
        $i = 0;
        $booking = new Booking;
        $all_times = $booking->findAll();

        $alldates=[];
        foreach($rows1['ids'] as $id)
        {

            $today = date('Y-m-d');
            foreach($all_times as $per_row)
            {
                // show($per_row->date);
                if($per_row->date >= $today && $per_row->drama_id==$id)
                {
                    $alldates[$i][] = $per_row->date;
                }
            }
            $drama_ids[] = $id;
            $i++;
        }
        // show($alldates);

        $data2['filter_dates'] =  $alldates;
        $data2['filter_ids'] = $drama_ids;
        return $data2;
    }


    private function insert_times_into_b_times($drama_id, $date, $time, $title)
    {
                $booking = new Booking;
                $timestamp = strtotime($time);
                $formattedTime = date("H:i:s", $timestamp);

                // ____If alredy included this time for this drama___
                // $arr1['drama_id'] = $drama_id;
                $arr1['date'] = $date;
                $arr1['time'] = $time;

                $included = $booking->first($arr1);

                if($included=='')
                {
                    // ___add date and time into b_time table____
                    $arr2['time'] = $formattedTime;
                    $arr2['drama_id'] = $drama_id;
                    $arr2['date'] = $date;
                    $arr2['title'] = $title;
                    $booking->insert($arr2);

                    $data['time_added'] = 'Successfully added times';
                    return $data['time_added'];
                }
                else
                {
                    $data['invalid_time_added'] = 'Already added this time....!.';
                    return $data['invalid_time_added'];
                }
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
                    $data['success'] = "Successfully added setas" ;
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
                    $data['success'] = "Successfully added setas on ".$date ;
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
                    $data['success'] = "Successfully added setas on ".$date ;
                    return $data['success'];
                }
    }
}
