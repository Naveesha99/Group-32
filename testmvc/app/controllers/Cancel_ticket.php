<?php 

class Cancel_ticket
{
	use Controller;

	public function index()
	{
		$data = [];

//_______________________________________come data from view page, find and validate the data from order table________________________-
		if(isset($_POST['bookingid']))
		{
				$order = new Orders;

				$arr['order_id'] = $_POST['bookingid'];
				$arr['email'] = $_POST['email'];
				$arr['phone'] = $_POST['phone'];

				$arr1['order_id'] = $_POST['bookingid'];

				$orderID = $_POST['bookingid'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];

				if($order->validate($arr))
				{
					$row = $order->first($arr1);

					if($row)
					{
						$db_orderID = $row->order_id;
						$db_phone = $row->phone;
						$db_email = $row->email;
						$db_date = $row->drama_date;
						$db_time = $row->drama_time;
						$db_seat_id = $row->seat_id;
						$db_drama_id = $row->drama_id;
						$db_payment = $row->payment;
						$db_refund = $row->refund;
						$db_username = $row->username;

						$seat_ids_array = explode(',', $db_seat_id);
						$seat_count = count($seat_ids_array);
						// show('ishan'.$seat_count);
						
						$time_zone = new DateTimeZone('Asia/Colombo');// Set the timezone to Asia/Colombo for Sri Lanka
						$current_datetime = new DateTime('now', $time_zone);  // Current date and time in Sri Lanka timezone

						$db_datetime_str = $db_date . ' ' . $db_time;
						$db_datetime = new DateTime($db_datetime_str, $time_zone);

						$time_difference_seconds = $db_datetime->getTimestamp() - $current_datetime->getTimestamp(); // Calculate the difference in seconds


						if($time_difference_seconds >= 86400 && $db_refund=='no')
						{
							// show("ishan".$time_difference_seconds);

							if($phone != $db_phone)
							{
								$order->errors['phone']="Invalid phone number";
							}
							if($email != $db_email)
							{
								$order->errors['email']="Invalid email";
							}	

							if($seat_count>3 && $phone == $db_phone && $email == $db_email)
							{
								// show($seat_count);
								$data['more_seats'] = $db_seat_id;
								$data['total_price'] = $db_payment;
								$data['order_id'] = $db_orderID;
								$data['drama_time'] = $db_time;
								$data['drama_date'] = $db_date;
								$data['drama_id'] = $db_drama_id;
								$data['email'] = $db_email;
								$data['username']=$db_username;
							}
							if($seat_count<=3 && $phone == $db_phone && $email == $db_email)
							{
								// show($seat_count);
								$data['min_seats'] = $db_seat_id;
								$data['total_price'] = $db_payment;
								$data['order_id'] = $db_orderID;
								$data['drama_time'] = $db_time;
								$data['drama_date'] = $db_date;
								$data['drama_id'] = $db_drama_id;
								$data['email'] = $db_email;
								$data['username']=$db_username;
							}
						}
						else if($time_difference_seconds < 86400)
						{
							$order->errors['expire_date'] = "You can't cancel tickets. Because there is less than 24 hours until the drama starts.";
						}
						else
						{
							$order->errors['expire_date'] = "You can't cancel tickets. Because you have canceled tickets once before";
						}
					}
					else
					{
						$order->errors['order_id'] = "Booking ID is incorrect. Enter correct Booking ID";
					}

					$data['errors']=$order->errors;
				}
				else
				{
					$data['errors']=$order->errors;
				}
				
		}


// ______________________Update the order, refund tables and update seat_map(time1, time2, or time3)______________________________
				if(isset($_POST['refund']) && isset($_POST['cancel_seats_array']) &&isset($_POST['remain_seats_array']))
				{

					$cancel_seats_serialized = $_POST['cancel_seats_array'];
					$cancel_seats_array = json_decode($cancel_seats_serialized, true);
					// show($cancel_seats_array);
					$cancel_seat_string ="";
					foreach($cancel_seats_array as $i)
					{
						$cancel_seat_string .= $i.",";
					}

		if($_POST['remain_seats_array'] != 0)
		{
			$remain_seats_serialized = $_POST['remain_seats_array'];
			$remain_seats_array = json_decode($remain_seats_serialized, true);
			$remain_seat_string = "";
			foreach($remain_seats_array as $i)
			{
				$remain_seat_string .= $i.",";
			}
		}
		else
		{
			$remain_seat_string =0;
		}
					$order_id = $_POST['order_id'];
					$email = $_POST['email'];
					$username = $_POST['username'];
					$refund = $_POST['refund'];
					$drama_time = $_POST['drama_time'];
					$drama_date = $_POST['drama_date'];
					$drama_id = $_POST['drama_id'];

					$refund_table = new Refund;
					$orders = new Orders;

					//insert data for "refund" table___________
					$arr['order_id'] = $order_id;
					$arr['email'] = $email;
					$arr['cancel_seats'] = $cancel_seat_string;
					$arr['remain_seat'] = $remain_seat_string;
					$arr['refund'] = $refund;;
					$arr['refund_status'] = 'pending';
					$refund_table->insert($arr);

					//update data on "orders" table___________
					$arr1['refund']='pending';
					$arr1['seat_id']=$remain_seat_string;
					$array['order_id']=$order_id;

					$row1 = $orders->first($array);
					$ids = $row1->id;
					$orders->update($ids, $arr1);



					if($drama_time <= '12:00:00')
					{
						$timeslot1 = new Timeslot1;

						//details for data find
						$arr2['drama_id'] = $drama_id;
						$arr2['date'] = $drama_date;
						$arr2['time'] = $drama_time;

						//details for data update
						$arr3['status'] = 'free';
						$arr3['username'] = null;
						$arr3['email'] = null;
						$arr3['phone'] = null;
						$arr3['price'] = 0;

						foreach($cancel_seats_array as $seat)
						{
							$arr2['seat_id'] = $seat;
							$row = $timeslot1->first($arr2);
							$id = $row->id;

							$timeslot1->update($id, $arr3);
						}

						// ___________________Send Email to the User____________________
						$name = $username;
						$refund_prize = $refund;
						$dramaID = $drama_id;
						$date = $drama_date;
						// $time = date("h:i A", strtotime($drama_time));
						$c_seats=$cancel_seat_string;
						$r_seats = $remain_seat_string;
						$sender_name = "PUNCHI THEATER";
						$sender_email = "ishanchamika.sa@gmail.com";
						$recipient_email = $email;

						$subject = "Puchi Theater Ticket cencelling";
						$body = "Hi $name, Your ticket cancellation is successfull. 
Your refund    : Rs.$refund_prize
Drama ID       : $dramaID
Cancelled seats: $c_seats 
Remaining seats: $r_seats
If the seats are left then they will be valid for you on the scheduled date. Come to the 'PUNCHI THEATER' on $date to get refund.
Thank you.";
		
						if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
							echo "Email Sent";
						}
						else{
							echo "Something went wrong";
						}

						$data['refund'] = $refund;
					}

					else if($drama_time <= '18:00:00')
					{
						$timeslot2 = new Timeslot2;

						$arr2['drama_id'] = $drama_id;
						$arr2['date'] = $drama_date;
						$arr2['time'] = $drama_time;

						$arr3['status'] = 'free';
						$arr3['username'] = null;
						$arr3['email'] = null;
						$arr3['phone'] = null;
						$arr3['price'] = 0;

						foreach($cancel_seats_array as $seat)
						{
							$arr2['seat_id'] = $seat;
							$row = $timeslot2->first($arr2);
							$id = $row->id;

							$timeslot2->update($id, $arr3);
						}

						// ___________________Send Email to the User____________________
						$name = $username;
						$refund_prize = $refund;
						$dramaID = $drama_id;
						$date = $drama_date;
						// $time = date("h:i A", strtotime($drama_time));
						$c_seats=$cancel_seat_string;
						$r_seats = $remain_seat_string;
						$sender_name = "PUNCHI THEATER";
						$sender_email = "ishanchamika.sa@gmail.com";
						$recipient_email = $email;

						$subject = "Puchi Theater Ticket cencelling";
						$body = "Hi $name, Your ticket cancellation is successfull. 
Your refund    : Rs.$refund_prize
Drama ID       : $dramaID
Cancelled seats: $c_seats 
Remaining seats: $r_seats
If the seats are left then they will be valid for you on the scheduled date. Come to the 'PUNCHI THEATER' on $date to get refund.
Thank you.";
		
						if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
							echo "Email Sent";
						}
						else{
							echo "Something went wrong";
						}

						$data['refund'] = $refund;

					}

					else
					{
						$timeslot3 = new Timeslot3;

						$arr2['drama_id'] = $drama_id;
						$arr2['date'] = $drama_date;
						$arr2['time'] = $drama_time;

						$arr3['status'] = 'free';
						$arr3['username'] = null;
						$arr3['email'] = null;
						$arr3['phone'] = null;
						$arr3['price'] = 0;

						foreach($cancel_seats_array as $seat)
						{
							$arr2['seat_id'] = $seat;
							$row = $timeslot3->first($arr2);
							$id = $row->id;

							$timeslot3->update($id, $arr3);
						}

						// ___________________Send Email to the User____________________
						$name = $username;
						$refund_prize = $refund;
						$dramaID = $drama_id;
						$date = $drama_date;
						// $time = date("h:i A", strtotime($drama_time));
						$c_seats=$cancel_seat_string;
						$r_seats = $remain_seat_string;
						$sender_name = "PUNCHI THEATER";
						$sender_email = "ishanchamika.sa@gmail.com";
						$recipient_email = $email;

						$subject = "Puchi Theater Ticket cencelling";
						$body = "Hi $name, Your ticket cancellation is successfull. 
Your refund    : Rs.$refund_prize
Drama ID       : $dramaID
Cancelled seats: $c_seats 
Remaining seats: $r_seats
If the seats are left then they will be valid for you on the scheduled date. Come to the 'PUNCHI THEATER' on $date to get refund.
Thank you.";
		
						if(mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")){
							echo "Email Sent";
						}
						else{
							echo "Something went wrong";
						}

						$data['refund'] = $refund;
					}
				}

		$this->view('/ticket_booking/cancel_ticket', $data);
	}
}