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

            if(isset($_POST['cancelbtn'])){
        // if(isset($_POST['id'])){
            $sentReq=new Reservationrequests;
            $find=[
                'id'=>$_POST['id']
            ];
            $result=$sentReq->where($find);
            if($result){
                $arr=[
                    'status'=>'refund',
                    'refundedAmount'=>$_POST['refund']
                ];

                $id=$_POST['id'];
                $refund=$_POST['refund'];
                $reqid=$_POST['id'];
                $hallno=$_POST['hallno'];
                $bookingdate=$_POST['date'];
                $reservationistid=$_SESSION['USER']->id;
                $user1=new User;
                $find=[
                    'id'=>$reservationistid
                ];
                $result=$user1->where($find);

                // $username=$result[0]->username;
                $email=$result[0]->email;


                $sentReq->update($id,$arr);
                        // $otp = rand(100000, 999999);
                // // ______Send Email to the User_______
						// $name = $username;
						$refund_prize = $refund;
						$hallNo = $hallno;
						$date = $bookingdate;
                        $reqid=$reqid;
						$sender_name = "PUNCHI THEATER";
						$sender_email = "dillenora@gmail.com";
						$recipient_email = "ishanchami9@gmail.com";

						$subject = "Puchi Theater Ticket cancellation ";
						$body = "Hi , Please enter this OTP code and click confirm. 
                            Your refund    : Rs.$refund_prize
                            Hall No       : $hallNo
                            Req ID       : $reqid
                            Booking Date: $date . ";
		
						if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
							echo "Email Sent";
						}
						else{
							echo "Something went wrong";
						}
                $data=[
                    'success'=>"Your request has been cancelled successfully"
                ];


            }
            else{
                $data=[
                    'error'=>"Error in cancelling the request"
                ];
            }
        $this->view('cancel',$data);

        }

        // $this->view('cancel',$data);
    }

}
