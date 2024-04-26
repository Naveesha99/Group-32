<?php

/**
 * home class
 */
class Cancel_drama
{
    use Controller;

    public function index()
    {
        $data = [];
        $booking = new Booking;
        $drama_details = $booking->findAll();

        $today = date('Y-m-d');
        $nextDate1 = date('Y-m-d', strtotime("+0 day", strtotime($today)));
        $nextDate2 = date('Y-m-d', strtotime("+1 day", strtotime($today)));
        $nextDate3 = date('Y-m-d', strtotime("+2 day", strtotime($today)));
        $nextDate4 = date('Y-m-d', strtotime("+3 day", strtotime($today)));
        $nextDate5 = date('Y-m-d', strtotime("+4 day", strtotime($today)));
        $nextDate6 = date('Y-m-d', strtotime("+5 day", strtotime($today)));
        $nextDate7 = date('Y-m-d', strtotime("+6 day", strtotime($today)));

        // show($nextDate7);

        $details_array = [];

        foreach($drama_details as $x)
        {
            if($x->date >= $today)
            {
               
                $details_array[] = $x; 
            }
        }
        
        $data['details_array'] = $details_array;
        // show($data);
 

// _________________(1)________Check input data are come_______________________
            if(isset($_POST['drama_id']))
            {
                // show($_POST);
                if($_POST['drama_id'] == '')
                {
                    $data['not_drama'] = 'Select the drama should be cancelled';
                }
                if($_POST['reason'] == '')
                {
                    $data['not_reason'] = 'Reason is required';
                }
                if($_POST['drama_id'] != '' && $_POST['reason'] != '' && $_POST['drama_name'] != '' && $_POST['drama_date'] != '' && $_POST['drama_time'] != '')
                {
                    $id = $_POST['id'];
                    $drama_id = $_POST['drama_id'];
                    $drama_name = $_POST['drama_name'];
                    $drama_date = $_POST['drama_date'];
                    $drama_time = $_POST['drama_time'];
                    $reason = $_POST['reason'];

                    $data['id'] = $id;
                    $data['drama_id'] = $drama_id;
                    $data['drama_name'] = $drama_name;
                    $data['drama_date'] = $drama_date;
                    $data['drama_time'] = $drama_time;

                    if($today == $drama_date || $nextDate1 == $drama_date || $nextDate2 == $drama_date || $nextDate3 == $drama_date || $nextDate4 == $drama_date || $nextDate5 == $drama_date || $nextDate6 == $drama_date || $nextDate7 == $drama_date)
                    {
                        $arr['drama_id'] = $drama_id;
                        $arr['drama_date'] = $drama_date;
                        $arr['drama_time'] = $drama_time;

                        $order = new Orders;
                        $rows = $order->where($arr);
                            // show($rows);
                            

                        $count = 0;
                        if($rows)
                        {
                            // show($_POST);
                            foreach($rows as $x)
                            {
                                $count = $count+1;
                            }

                            $data['bookings'] = $rows;
                            $data['booked_count'] = $count;
                        }
                        else
                        {
                            $count = 0;
                            $data['booked_count'] = $count;
                        }                          
                    }
                    else
                    {
                        $data['next_week'] = 'k';
                    }

                }
            }




//_____(2)_____________________________________________Check the confirm and after update the tables__________________________________________


            //__________________________has orders________________________________________________
            if(isset($_POST['b_drama_id']) || isset($_POST['nb_drama_id']) || isset($_POST['free_drama_id']))
            {
                if(isset($_POST['b_drama_id']))
                {
                                if($_POST['b_drama_id'] != null && $_POST['b_drama_date'] != null && $_POST['b_drama_time'] != null && $_POST['b_id']!=null && $_POST['b_drama_name'] != null)
                                {
                                    //_________delete timeslot from b_time table___________
                                    $booking = new Booking;
                                    $ids = $_POST['b_id'];
                                    $booking->delete($ids);

                                    $time = $_POST['b_drama_time'];

                                    $arr['drama_id'] = $_POST['b_drama_id'];
                                    $arr['date'] = $_POST['b_drama_date'];
                                    $arr['time'] = $_POST['b_drama_time'];
                                    $arr['status'] = 'free';

                                    $upd['status'] = 'cancelled';

                                    if($time <= '12:00:00')
                                    {
                                        $timslot1 = new Timeslot1;

                                        $rows = $timslot1->where($arr);
                                        if($rows)
                                        {
                                            foreach($rows as $x)
                                            {
                                                $timslot1->update($x->id, $upd);
                                            }
                                        } 
                                    }
                                    else if($time <= '18:00:00')
                                    {
                                        $timslot2 = new Timeslot2;

                                        $rows = $timslot2->where($arr);

                                        if($rows)
                                        {
                                            foreach($rows as $x)
                                            {
                                                $timslot2->update($x->id, $upd);
                                            }
                                        } 
                                    }
                                    else
                                    {
                                        $timslot3 = new Timeslot3;

                                        $rows = $timslot3->where($arr);

                                        if($rows)
                                        {
                                            foreach($rows as $x)
                                            {
                                                $timslot3->update($x->id, $upd);
                                            }
                                        } 
                                    }


                                    //__________________________send email and Update Cancel_drama_refund table________________________________________________

                                    $order = new Orders;
                                    $arr2['drama_id'] = $_POST['b_drama_id'];
                                    $arr2['drama_date'] = $_POST['b_drama_date'];
                                    $arr2['drama_time'] = $_POST['b_drama_time'];

                                    $details = $order->where($arr2);

                                    $canceldrama_refund = new Drama_refund;
                                    foreach($details as $x)
                                    {
                                        $booking_id = $x->order_id;
                                        $email = $x->email;
                                        $user_name = $x->username;
                                        $ref_price = $x->payment;
                                        $ref_status = $x->refund;

                                        $drama_name = $_POST['b_drama_name'];
                                        $d_date = $x->drama_date;
                                        $d_time = $x->drama_time;
                                        $seats = $x->seat_id;

                                        $arr5['booking_id'] = $booking_id;
                                        $arr5['drama_id'] = $_POST['b_drama_id'];
                                        $arr5['drama_name'] = $_POST['b_drama_name'];
                                        $arr5['drama_date'] = $_POST['b_drama_date'];
                                        $arr5['drama_time'] = $_POST['b_drama_time'];
                                        $arr5['email'] = $email;

                                        if($ref_status == 'no' || $ref_status == 'pending')
                                        { //not other refunded yet
                                            $arr5['refund'] = $ref_price;
                                        }
                                        else
                                        {  //if current user have already refunded
                                            $arr5['refund'] = $ref_price - $ref_status;
                                        }
                                        $canceldrama_refund->insert($arr5);

                                        $this->email_send_for_drama_cancel($email, $user_name, $drama_name, $d_date, $d_time, $booking_id, $ref_price);
                                    }
                                    $data['update_rows'] = 'Successfully Updated rows';
                                }
                }
                        //__________________________not orders________________________________________________
                        if(isset($_POST['nb_drama_id']) && isset($_POST['nb_drama_date']) && isset($_POST['nb_drama_time']) && isset($_POST['nb_id']))
                        {
                            show($_POST);
                            if($_POST['nb_drama_id'] != null && $_POST['nb_drama_date'] != null && $_POST['nb_drama_time'] != null && $_POST['nb_id']!=null)
                            {
                                $booking = new Booking;
                                $ids = $_POST['nb_id'];
                                $booking->delete($ids);

                                $time = $_POST['nb_drama_time'];

                                $arr['drama_id'] = $_POST['nb_drama_id'];
                                $arr['date'] = $_POST['nb_drama_date'];
                                $arr['time'] = $_POST['nb_drama_time'];
                                $arr['status'] = 'free';

                                $upd['status'] = 'cancelled';

                                if($time <= '12:00:00')
                                {
                                    $timslot1 = new Timeslot1;

                                    $rows = $timslot1->where($arr);

                                    if($rows)
                                    {
                                        foreach($rows as $x)
                                        {
                                            $timslot1->update($x->id, $upd);
                                        }
                                    }
                                    $data['updated_rows'] = 'Successfully Updated rows';
                                }
                                else if($time <= '18:00:00')
                                {
                                    $timslot2 = new Timeslot2;

                                    $rows = $timslot2->where($arr);

                                    if($rows)
                                    {
                                        foreach($rows as $x)
                                        {
                                            $timslot2->update($x->id, $upd);
                                        }
                                    }
                                    $data['updated_rows'] = 'Successfully Updated rows';
                                }
                                else
                                {
                                    $timslot3 = new Timeslot3;

                                    $rows = $timslot3->where($arr);

                                    if($rows)
                                    {
                                        foreach($rows as $x)
                                        {
                                            $timslot3->update($x->id, $upd);
                                        }
                                    }
                                    $data['updated_rows'] = 'Successfully Updated rows';
                                }

                            }
                        }

            //__________________________future dates________________________________________________
                if(isset($_POST['free_drama_id']) && isset($_POST['free_drama_date']) && isset($_POST['free_drama_time']))
                {
                    show($_POST);
                    if($_POST['free_drama_id'] != null && $_POST['free_drama_date'] != null && $_POST['free_drama_time'] != null)
                    {
                        $booking = new Booking;
                        $ids = $_POST['free_id'];
                        $booking->delete($ids);

                        $time = $_POST['free_drama_time'];

                        $arr['drama_id'] = $_POST['free_drama_id'];
                        $arr['date'] = $_POST['free_drama_date'];
                        $arr['time'] = $_POST['free_drama_time'];
                        $arr['status'] = 'free';

                        $upd['status'] = 'cancelled';

                        if($time <= '12:00:00')
                        {
                            $timslot1 = new Timeslot1;

                            $rows = $timslot1->where($arr);

                            if($rows)
                            {
                                foreach($rows as $x)
                                {
                                    $timslot1->delete($x->id);
                                }
                            }
                            
                            $data['deleted_rows'] = 'deleted rows';
                        }
                        else if($time <= '18:00:00')
                        {
                            $timslot2 = new Timeslot2;

                            $rows = $timslot2->where($arr);

                            if($rows)
                            {
                                foreach($rows as $x)
                                {
                                    $timslot2->delete($x->id);
                                }
                            }
                            $data['deleted_rows'] = 'deleted rows';
                        }
                        else
                        {
                            $timslot3 = new Timeslot3;

                            $rows = $timslot3->where($arr);

                            if($rows)
                            {
                                foreach($rows as $x)
                                {
                                    $timslot3->delete($x->id);
                                }
                            }
                            $data['deleted_rows'] = 'deleted rows';
                        }   
                    }
                }
            }
    $this->view('/ticket_booking/cancel_drama', $data);
}
    
    private function email_send_for_drama_cancel($email, $user_name, $drama_name, $d_date, $d_time, $bookingID, $ref_price)
    {
        $name = $user_name;
        $booked_id = $bookingID;
        $price = $ref_price;
        $drama = $drama_name;
        $date = $d_date;
        $db_time = $d_time;
        $time = date("h:i A", strtotime($db_time));

        $sender_name = "PUNCHI THEATER";
        $sender_email = "ishanchamika.sa@gmail.com";
        $recipient_email = $email;
        $subject = "Puchi Theater Drama cancellation";
        $body = "Hi $name, We regret to inform you that, $drama drama scheduled to be shown on $date has been cancelled. You can get the total amount you have paid by visiting Punchi Theater or by visiting the link below. 

        Booking ID: $booked_id
        Amount Paid    : Rs.$price
        Cancelled drama  : $drama
        Cancel Date      : $date
        Cancel Time      : $time
Sorry for the inconvenience caused to you.
If you have any issues,please call us on 011-2345678 or visit our website for more details
Thank you.";

        if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
            echo "Email Sent";
        }
        else{
            echo "Something went wrong";
        }
    }
}

