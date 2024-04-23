<?php
header("Cache-Control: no-cache");

/**
 * home class
 */
class Addtimes
{
    use Controller;

    public function index()
    {
        $data = [];

        $homes = new Homes;
        $t_prices = new Price;

        $row =$homes->findAll();
        $data['home_data'] = $row;

        $rows1 = $this->check_time_has_next_7_days();
        $data['all_days'] = $rows1;




        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset($_POST['title']) && $_POST['title'] == '')
            {
                $data['not_drama'] = 'Selectttt the drama to add time or times';
            }
            if($_POST['start_date'] == '' || $_POST['end_date'] =='')
            {
                $data['not_date'] = 'select the both drama starting date and end date';
            }
            if((!isset($_POST['time1']) && !isset($_POST['time2'])))
            {
                $data['not_time'] = 'Select  drama time or times';
            }
            if($_POST['price'] == '')
            {
                $data['not_price'] = 'Select  drama time or times';
            }




            if(isset($_POST['title']) && $_POST['title']!='') 
            {
                // show($_POST['drama-id']);
                // show($_POST['title']);
                if($_POST['start_date'] !='' && $_POST['end_date'] != '')
                {
                    if(isset($_POST['price']) && $_POST['price'] >0)
                    { 
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
                                    // return $data5;
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

                                    $data['filt_date'] =$data5;
                                    // return $data5;
                                }
                            }
                    }
                }
            } 
         

        }
        
        // YourController.php
        
        // Check if the request is a POST request
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // Check if start_date and end_date are set
            if (isset($_POST["start_date"]) && isset($_POST["end_date"])) 
            {
                // Retrieve start_date and end_date from POST data
                $start_date = $_POST["start_date"];
                $end_date = $_POST["end_date"];
        
                // Validate start_date and end_date (You can perform any validation you need here)
                // For example, you can check if they are in the correct format or if end_date is after start_date
        
                // Simulate processing and prepare the response
                // Here, we just echo the received data as a response
                $response = array(
                    "start_date" => $start_date,
                    "end_date" => $end_date
                );
        
                // Send the response back as JSON
                header('Content-Type: application/json');
                echo json_encode($response);
                exit; // Stop further execution
            } else {
                // If start_date or end_date is not set, return an error response
                $response = array(
                    "error" => "Start date or end date is missing"
                );
        
                // Send the error response back as JSON
                header('Content-Type: application/json');
                echo json_encode($response);
                exit; // Stop further execution
            }
        } 
        else 
        {
            // If it's not a POST request, handle accordingly
            // For example, redirect to an error page or show an error message
            echo "Error: Invalid request method";
        }
        
        // $rows2 = $this->find_all_times($rows1);
        // $data['booked_dates'] = $rows2;
        // show($data['booked_dates']); 



        // if($_POST)
        // {
        //     if($_POST['drama_id']!=='' && $_POST['date']!=='' && $_POST['time']!=='' && $_POST['price']!=='')
        //     {
        //         $booking = new Booking;
        //         $timestamp = strtotime($_POST['time']);
        //         $formattedTime = date("H:i:s", $timestamp);

        //         // ____If alredy included this time for this drama___
        //         $arr1['drama_id'] = $_POST['drama_id'];
        //         $arr1['date'] = $_POST['date'];
        //         $arr1['time'] = 
        //         $included = $booking->first($arr1);

        //         if($included=='')
        //         {
        //             // ___add date and time into b_time table____
        //             $arr2['time'] = $formattedTime;
        //             $arr2['drama_id'] = $_POST['drama_id'];
        //             $arr2['date'] = $_POST['date'];
        //             $booking->insert($arr2);

        //             $arr3['drama_id'] = $_POST['drama_id'];
        //             $arr3['t_type'] = 'Normal';
        //             $arr3['t_price'] = $_POST['price'];
        //             $t_prices->insert($arr3);

        //             $row = $this->addtimes($_POST['drama_id'], $_POST['time'], $_POST['date']);
        //             $data['row'] = $row;
        //         }
        //         else
        //         {
        //             $data['invalid'] = 'Already added this time....!.';
        //         }
                
        //     }
        //     else
        //     {
        //         $data['invalid'] = 'All data are required, please enter the all data.';
        //     }
        // }
       
        
		$this->view('/ticket_booking/addtimes', $data);
    }

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
        show($alldates);

        $data2['filter_dates'] =  $alldates;
        $data2['filter_ids'] = $drama_ids;
        return $data2;
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
