<?php 

// session_start();
class ReservaCancel
{
    use Controller;

    public function index()
    {
        $data = [];

		// $this->view('reservaHall',$data);

        if(isset($_POST['cancellation'])){
            $id = $_POST['formid']; 
            $acceptedTime = $_POST['formacceptedtime'];
            show($id);
            show($acceptedTime);
            $timeDifference = strtotime(date('Y-m-d H:i:s')) - strtotime($acceptedTime);

            $sentreq= new Reservationrequests();
            $find=[
                'id'=>$id
            ];
            $result=$sentreq->where($find);

            
            if ($timeDifference < (12 * 3600)) { // Check if time difference is less than 12 hours (in seconds)
                $data=[
                    'detailsofReq'=>$result,
                    'refundPercentage'=>1
                ];
            } else {
                $data=[
                    'detailsofReq'=>$result,
                    'refundPercentage'=>0.5
                ];
            }
            $this->view('cancel', $data); // Load noCancel view

        }

            if(isset($_POST['cancelbtn']))
            {
                $reqid=$_POST['id'];
                $sentReq=new Reservationrequests;
                $find=[
                    'id'=>$_POST['id']
                ];
                $result=$sentReq->where($find);
                $reservationistid=$_SESSION['USER']->id;
                $user1=new User;
                $find=[
                    'id'=>$reservationistid
                ];
                $result=$user1->where($find);
                $email=$result[0]->email;
                $otp = $_POST['otp'];
                // $data['otp_again'] = $otp;

                $data=[
                    'reqid'=>$reqid,
                    'refund'=>$_POST['refund'],
                    'otp_again'=>$otp,
                    // 'refundPercentage'=>$_POST['refundPercentage']
                ];

                $system_otp = $_POST['otp'];
						
                $sender_name = "PUNCHI THEATER";
                $sender_email = "lnaveesha4@gmail.com";
                $recipient_email = $email;;

                $subject = "Puchi Theater Ticket cancellation ";
                $body = "Hi , Please enter this OTP code and click confirm. 
                    OTP           : $system_otp
                    ";

                if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
                    echo "Email Sent";
                }
                else{
                    echo "Something went wrong";
                }

            //  $this->view('cancel',$data);
        }


        // if(isset($_POST['otp']))
        // {
        //     $otp = $_POST['otp'];
        //     $data['otp_again'] = $otp;
        // }

        if(isset($_POST['user_otp']) && isset($_POST['sys_otp']))
        {
            if($_POST['user_otp'] == $_POST['sys_otp'])
            {
                show($_POST);
                // $data['otp'] = $_POST['otp'];
                $data['success'] = "OTP is correct";
                $id=$_POST['reqid'];
                $refund=$_POST['refund'];
                $sentReq=new Reservationrequests;
                $find=[
                    'id'=>$id
                ];
                $result=$sentReq->where($find);
                $arr=[
                    'status'=>'cancelled',
                    'refundedAmount'=>$refund
                ];
                $sentReq->update($id,$arr);

                
                // $sentReq=new Reservationrequests;
                // $arr=$sentReq->where($find);
                // $data=[
                //     'detailsofReq'=>$id
                // ];
                // $this->view('reservaQR1', $data);


                
            }
            else
            {
                $data['success'] = "OTP is incorrect";
            }
        }
        $this->view('cancel',$data);
    }

}