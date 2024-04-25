<?php 


class ReservaPayment
{

	use Controller;

	public function index()
	{


		if(empty($_SESSION['USER'])){
			redirect('reservalogin');
			exit();
		}
		

		$data = [];
	
		if($_SERVER['REQUEST_METHOD'] == "GET"){	
			$id = isset($_GET['id']) ? $_GET['id'] : null;
			$hall = isset($_GET['hall']) ? $_GET['hall'] : null;
			$hours = isset($_GET['hours']) ? $_GET['hours'] : null;
			$amount = isset($_GET['amount']) ? $_GET['amount'] : null;
			$hcount = isset($_GET['hcount']) ? $_GET['hcount'] : null;
			$date = isset($_GET['date']) ? $_GET['date'] : null;
			$startTime = isset($_GET['startTime']) ? $_GET['startTime'] : null;
			$endTime = isset($_GET['endTime']) ? $_GET['endTime'] : null;
			$sounds = isset($_GET['sounds']) ? $_GET['sounds'] : null;
			$standings = isset($_GET['standings']) ? $_GET['standings'] : null;

			$detailsofReq = [
				'id' => $id,
				'hall' => $hall,
				'hours' => $hours,
				'amount' => $amount,
				'hcount' => $hcount,
				'date' => $date,
				'startTime' => $startTime,
				'endTime' => $endTime,
				'sounds' => $sounds,
				'standings' => $standings
	
			];
	

			$halldetails=new Hall;
		
			$detailsofhall = $halldetails->where(['hallno' => $hall]);
		// $detailsofhall = $halldetails->first($detailsofhall);

		// $amountOneHour = $detailsofhall ? $detailsofhall->amountOneHour : null;
				// echo "Hall: " . $detailsofhall->id . "<br>";

			// $data=[
			// 	'acceptedReservations'=>$acceptedReservations1,
			// 	'hall'=>$detailsofhall,
			// ];

			$data = [
				// 'id' => $id,
				// 'hall' => $hall,
				// 'hours' => $hours,
				// 'amount' => $amount,
				'detailsofReq' => $detailsofReq,
				'detailsofhall' => $detailsofhall
			];

		$this->view('reservaPayment',$data);
	
		}

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			// redirect('reservaHall');

			$reservaPayment = new Reservationpayments;
			$details=[
				'reqid'=>$_POST['reqid'],
				'fullname'=>$_POST['fullname'],
				'mobile'=>$_POST['mobile'],
				'email'=>$_POST['email'],
				'isPaid'=>$_POST['isPaid'],
			];

			// $findid=[
			// 	'reqid'=>$_POST['reqid']
			// ];

			// $existingPayment=$reservaPayment->first($findid);

			// if($existingPayment){
				// $id=$existingPayment['id'];
				// $arr=[
					// 'fullname'=>$_POST['fullname'],
					// 'mobile'=>$_POST['mobile'],
					// 'email'=>$_POST['email'],
				// ];
				
				// if($reservaPayment->validate($arr)){
				// 	$reservaPayment->update($id,$arr);
				// }
				// else{
				// 	$data['errors'] = $reservaPayment->errors;
				// }
			// }
			// else
			// {
				if($reservaPayment->validate($details)){
					$reservaPayment->insert($details);
				}
				else{
					$data['errors'] = $reservaPayment->errors;
				}

	
			// $data['errors'] = $reservaPayment->errors;			
			}

        }

	}
// }
