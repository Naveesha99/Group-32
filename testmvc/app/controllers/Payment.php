<?php

// header("Cache-Control: no-cache");
class Payment
{
    use Controller;

    public function index()
    {
        $data = [];

// (1)____________________received selected seats from previous page(seat_map)_______________________________

        if(isset($_POST['selectedSeats']))
        {
            $selectedSeatsArray = json_decode($_POST['selectedSeats']);

            // Check if decoding was successful
            if ($selectedSeatsArray !== null) 
            {                
                $temp=$this->change_status($selectedSeatsArray, $_POST['drama_id'], $_POST['date'], $_POST['time'] ,$_POST['status'], $_POST['totalPrice'], $_POST['table']);
                $data['release'] = $temp;
                $this->view('/ticket_booking/payment', $data);
            } 
            else 
            {
                echo 'Please select the seats....!';
            }
        }
      


// (2)__________________Data coming from Ajax when clicking the "Confirm your details" button and store form data (email/name/phone)_______________________________
        if(isset($_POST['release']))
		{
            show($_POST['release']);

            session_start();

            $_SESSION['release'] = $_POST['release'];
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['price'] = $_POST['price'];

            $releaseData = json_decode($_POST['release'][0], true);
            $counts = count($releaseData);

            $seatsString = "";
            for($i=2; $i<$counts; $i++)
            {
                $seatsString .= $releaseData[$i]['seat_id'].",";
            }
            $seatsString = rtrim($seatsString, ",");

            $_SESSION['seats'] = $seatsString;

           
        
            $data['username']=$_POST['username'];
            $data['email']=$_POST['email'];
            $data['phone']=$_POST['phone'];
            $data['price']=$releaseData[1];

            
           
            if($releaseData[0]=='table1')
            {
                $timeslot1 = new Timeslot1;

                if($timeslot1->validate($data))
                {
                    for($i=2; $i<$counts; $i++)
                    {
                        $dta = $releaseData[$i]['id'];

                        $timeslot1->update($dta, $data);
                    }
                    
                }
                else
                {
                    $data['errors'] = $timeslot1->errors;
                }
                
            }

            if($releaseData[0]=='table2')
            {
                $timeslot2 = new Timeslot2;

                if($timeslot2->validate($data))
                {
                    for($i=2; $i<$counts; $i++)
                    {
                        $dta = $releaseData[$i]['id'];

                        $timeslot2->update($dta, $data);
                    }
                   
                }
                else
                {
                    $data['errors'] = $timeslot2->errors;
                }
                
            }

            if($releaseData[0]=='table3')
            {
                $timeslot3 = new Timeslot3;

                if($timeslot3->validate($data))
                {
                    for($i=2; $i<$counts; $i++)
                    {
                        $dta = $releaseData[$i]['id'];

                        $timeslot3->update($dta, $data);
                    }
                    
                }
                else
                {
                    $data['errors'] = $timeslot3->errors;
                }
                
            }
            $this->view('/ticket_booking/payment',$data);
        }


// (3)__________________Data come from GET method after the payment successfull (orderId is generated)____________________________________

        if(isset($_GET['orderId']))
        {
            if(isset($_SESSION['release'])) 
            {
                //_____________________Update orders table______________________

                $orders = new Orders;

                $orderId = $_GET['orderId'];
                $releaseData1 = json_decode($_SESSION['release'][0], true);
                $counts = count($releaseData1);
           
                $seatsIDS = $_SESSION['seats'];

                $data3['order_id']=$orderId;
                $data3['payment']=$releaseData1[1];
                $data3['refund']='no';
                $data3['username']=$_SESSION['username'];
                $data3['email']= $_SESSION['email'];
                $data3['phone']= $_SESSION['phone'];
                $data3['drama_id']=$releaseData1[2]['drama_id'];
                $data3['drama_date']=$releaseData1[2]['date'];
                $data3['drama_time']=$releaseData1[2]['time'];
                $data3['seat_id']=$seatsIDS;

                $orders->insert($data3);


                // ___________________Send Email to the User____________________
                // require_once "phpqrcode/qrlib.php";

                $name = $_SESSION['username'];
                $price = $releaseData1[1];
                $drama_id = $releaseData1[2]['drama_id'];
                $date = $releaseData1[2]['date'];
                $db_time = $releaseData1[2]['time'];
                $time = date("h:i A", strtotime($db_time));

                $sender_name = "PUNCHI THEATER";
                $sender_email = "ishanchamika.sa@gmail.com";
                $recipient_email = $_SESSION['email'];
                $subject = "Puchi Theater Ticket booking";
                $body = "Hi $name, Welcome to Punchi Theater. Your payment and seats reservation is successfull.
      
                Booking ID: $orderId
                Amount Paid    : Rs.$price
                Reserved Seats : $seatsIDS
                Drama ID  : $drama_id
                Date      : $date
                Time      : $time
If you have any issues,please call us on 011-2345678 or visit our website for more details
Thank you.";

                if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
                    echo "Email Sent";
                }
                else{
                    echo "Something went wrong";
                }
                


                //__________Update "Pending" status into "Booked" status________
                if($releaseData1[0]=='table1')
                {
                    $timeslot1 = new Timeslot1;
                    for($i=2; $i<$counts; $i++)
                    {
                        $data['status']='booked';
                        $dta = $releaseData1[$i]['id'];

                        $timeslot1->update($dta, $data);
                    }
                }

                if($releaseData1[0]=='table2')
                {
                    $timeslot2 = new Timeslot2;
                    for($i=2; $i<$counts; $i++)
                    {
                        $data['status']='booked';
                        $dta = $releaseData1[$i]['id'];

                        $timeslot2->update($dta, $data);
                    }
                }

                if($releaseData1[0]=='table3')
                {
                    $timeslot3 = new Timeslot3;
                    for($i=2; $i<$counts; $i++)
                    {
                        $data['status']='booked';
                        $dta = $releaseData1[$i]['id'];

                        $timeslot3->update($dta, $data);
                    }
                }
            }
            
        }

    }



    //_____________________________Change "free"status into "pending"___________________________________
    private function change_status($selectedSeatsArray, $drama_id, $date, $time ,$status, $price, $table)
    {
        
        if($table=='table1' && $status== 'free')
        {
            
            $timeslot1 = new Timeslot1;

            $i = 2;
            foreach ($selectedSeatsArray as $seat)
            {
                
                $arr['seat_id']= $seat;
                $arr['drama_id']= $drama_id;
                $arr['date']= $date;
                $arr['time']= $time;

                $data1['status']='pending';


                    $data = $timeslot1->where($arr);

                    $id=$data[0]->id;
                

                    if($data[0]->status== 'free')
                    {
                        $release[0]='table1';
                        $release[1]=$price;
                        // show($release[1]);
                        $timeslot1->update($id, $data1);
                        // echo'successfully temporarily booked '.$data[0]->seat_id.'<br>';
                        $release[$i]=$data[0];
                        $i=$i+1;
                    }
                    else
                    {
                        redirect('Error_message');
                    }
                
            }
            return $release;
        }


            if($table=='table2' && $status== 'free')
            {
                $timeslot2 = new Timeslot2;
                $i=2;
    
                foreach ($selectedSeatsArray as $seat) 
                {
                    
                    $arr['seat_id']= $seat;
                    $arr['drama_id']= $drama_id;
                    $arr['date']= $date;
                    $arr['time']= $time;
    
                    $data1['status']='pending';
    
    
                    $data = $timeslot2->where($arr);

                    $id=$data[0]->id;
    
                    if($data[0]->status== 'free')
                    {
                        $release[0]='table2';
                        $release[1]=$price;
                        $timeslot2->update($id, $data1);
                        // echo'successfully temporarily booked '.$data[0]->seat_id.'<br>';
                        $release[$i]=$data[0];
                        $i=$i+1;
                    }
                    else
                    {
                        redirect('Error_message');
                    }
                
                }
                return $release;
    
            }
       

        if($table=='table3' && $status== 'free')
        {
            
            $timeslot3 = new Timeslot3;

            $i = 2;
            foreach ($selectedSeatsArray as $seat)
            {
                
                $arr['seat_id']= $seat;
                $arr['drama_id']= $drama_id;
                $arr['date']= $date;
                $arr['time']= $time;

                $data1['status']='pending';


                    $data = $timeslot3->where($arr);

                    $id=$data[0]->id;
                

                    if($data[0]->status== 'free')
                    {
                        $release[0]='table3';
                        $release[1]=$price;
                        // show($release[1]);
                        $timeslot3->update($id, $data1);
                        // echo'successfully temporarily booked '.$data[0]->seat_id.'<br>';
                        $release[$i]=$data[0];
                        $i=$i+1;
                    }
                    else
                    {
                        // echo 'Already booked you selected seats while your seats selection time<br>';
                        redirect('Error_message');
                    }
                
            }
            return $release;
        }      
    }
    

}

