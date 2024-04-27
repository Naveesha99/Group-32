<?php

/**
 * home class
 */
class check_viewers
{
    use Controller;

    public function index()
    {   
        $data = [];

        if(isset($_POST['qrdata']))
        {
            if($_POST['qrdata'] != '')
            {
                $arr1['booking_id'] = $_POST['qrdata'];
                $arr2['order_id'] = $_POST['qrdata'];


                $order = new Orders;
                $drama_cancel_list = new Drama_refund;
                
                $find_booking = $order->first($arr2);
                $cancel_drama_users = $drama_cancel_list->first($arr1); //find the user has  drama canceled refund or not

                if($cancel_drama_users)
                {
                    
                    if($find_booking)
                    {
                        $data['order_id'] = $find_booking->order_id;
                        $data['drama_id'] = $find_booking->drama_id;
                        $data['drama_date'] = $find_booking->drama_date;
                        $data['drama_time'] = $find_booking->drama_time;
                        $data['seat_id'] = $find_booking->seat_id;
                        $data['payment'] = $find_booking->payment;
                        $data['username'] = $find_booking->username;
                        $data['email'] = $find_booking->email;
                        $data['phone'] = $find_booking->phone;

                        $data['should_refund'] = $cancel_drama_users->refund;
                        $data['refund_amount'] = "This drama is cancelled.<br> " . $find_booking->username . " have to pay back <br>
                         Refund amount: Rs. " . $cancel_drama_users->refund . 
                         "<br>Are you sure to issue the refund ?";

                    }
                }
                else
                {
            
                    $user = $order->first($arr2);
                    if($user)
                    {
                        $data['order_id'] = $find_booking->order_id;
                        $data['drama_id'] = $find_booking->drama_id;
                        $data['drama_date'] = $find_booking->drama_date;
                        $data['drama_time'] = $find_booking->drama_time;
                        $data['seat_id'] = $find_booking->seat_id;
                        $data['payment'] = $find_booking->payment;
                        $data['username'] = $find_booking->username;
                        $data['email'] = $find_booking->email;
                        $data['phone'] = $find_booking->phone;
                        $order_id = $user->order_id;

                        $username = $user->username;
                        $email = $user->email;
                        $phone = $user->phone;

                        $seat_id = $user->seat_id;
                        $drama_id = $user->drama_id;
                        $drama_date = $user->drama_date;
                        $drama_time = $user->drama_time;

                        $payment = $user->payment;
                        $refund = $user->refund;

                       
                        if($refund == 'no')
                        {
                            $data['refund_amount'] = 0;
                        }
                        else if($refund == 'pending')
                        {
                            $arr['order_id'] = $order_id;
                            $ticket_refund = new Refund;
                            $row1 = $ticket_refund->first($arr2);

                            $data['should_refund'] = $row1->refund;
                            $data['refund_amount'] = $username . " have to pay back. <br>
                         Should be pay Rs." . $row1->refund . 
                         "<br>Canceled seats: " . $row1->cancel_seats . 
                         "<br>Remaining seats: " . $row1->remain_seat .
                         "<br>Are you sure to issue the refund ?";

                        }
                        else
                        {
                            $arr['order_id'] = $order_id;
                            $ticket_refund = new Refund;
                            $row1 = $ticket_refund->first($arr2);

                            $data['refund_amount'] = "Already refunded to <br> " . $username .
                         "<br>Refunded amount: Rs." . $refund . "\n" . 
                         "<br>Canceled seats: " . $row1->cancel_seats . "\n" . 
                         "<br>Remaining seats: " . $row1->remain_seat . "";

                        }
                    }
                    else
                    {
                        $data['no_user'] = 'User not found!';
                    }
                    
                }      
            }
        }



        if(isset($_POST['confirm_refund']) && isset($_POST['refund_amount']))
        {
            $arr5['order_id'] = $_POST['confirm_refund'];
            $arr6['booking_id'] = $_POST['confirm_refund'];

            $ticket_refund2 = new Refund;
            $order2 = new Orders;
            $cancel_drama_refund2 = new Drama_refund;

            $row1 = $order2->first($arr5);
            $row2 = $ticket_refund2->first($arr5);
            $row3 = $cancel_drama_refund2->first($arr6);

            if($row1)
            {
                $arr7['refund'] = $_POST['refund_amount'];
                $order2->update($row1->id, $arr7);
            }
            if($row2)
            {
                $arr8['refund_status'] = 'completed';
                $ticket_refund2->update($row2->id, $arr8);
            }
            if($row3)
            {
                $arr9['refund_status'] = 'completed';
                $cancel_drama_refund2->update($row3->id, $arr9);
            }
            $data['sucess'] = 'Refund issued successfully!';
            redirect('check_viewers');
        }


        $this->view('ticket_booking/check_viewers', $data); 
    }
}