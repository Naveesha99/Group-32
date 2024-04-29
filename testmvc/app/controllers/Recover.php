<?php
header("Cache-Control: no-cache");

Class Recover
{
    use Controller;

    public function index()
    {
        $data = [];
        if(isset($_POST['email']) && isset($_POST['phone']))
        {
            $order = new Orders;

            $arr['email'] = $_POST['email'];
            $arr['phone'] = $_POST['phone'];
            $arr['order_id'] = '000000';

            if($order->validate($arr))
            {
                $arr2['email'] = $_POST['email'];
                $arr2['phone'] = $_POST['phone'];

                $rows = $order->where($arr2);
                if($rows)
                {
                    $data['rows'] = $rows;

                    foreach($data['rows'] as $x)
                    {
                        $order_id =$x->order_id;
                        $payment = $x->payment;
                        $refund = $x->refund;
                        $name = $x->username;
                        $email = $x->email;
                        $drama_id = $x->drama_id;
                        $drama_date = $x->drama_date;
                        $drama_time = $x->drama_time;
                        $seat_id = $x->seat_id;
                    }


                // ___________________Send Email to the User____________________
                // require_once "phpqrcode/qrlib.php";

                $EMAILER = $email;
                $orderId = $order_id;
                $names = $name;
                $price = $payment;
                $refunding = $refund;
                $drama_ids = $drama_id;
                $date =$drama_date;
                $seatsIDS = $seat_id;
                $db_time = $drama_time;
                $time = date("h:i A", strtotime($db_time));

                $sender_name = "PUNCHI THEATER";
                $sender_email = "ishanchamika.sa@gmail.com";
                $recipient_email = $EMAILER;
                $subject = "Puchi Theater Ticket Booking Recovery";
                $body = "Hi $names, Welcome to Punchi Theater. Your payment and seats reservation details are like below.
      
                Booking ID: $orderId
                Amount Paid    : Rs.$price
                Reserved Seats : $seatsIDS
                Drama ID  : $drama_ids
                Date      : $date
                Time      : $time
                Refund    : Rs.$refunding
If you have any issues,please call us on 011-2222222 or visit our website for more details
Thank you.";

                if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
                    $data['send_email_message'];
                }
                else{
                    echo "Something went wrong";
                }
                }
                else
                {
                    $order->errors['not_data'] = "Booking details not found to your given email and phone number.";
                    $data['errors'] = $order->errors;
                }
            }
            else
            {
                $data['errors'] = $order->errors;
            }
        }
        // else
        // {
        //     echo 'nooooooo';
        // }
        

        $this->view('/ticket_booking/recover', $data);
    }
}