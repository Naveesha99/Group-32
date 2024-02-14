<?php


/**
 * Reservationrequests class
 */
class Reservationrequests
{

	use Model;

	// protected $table = 'reservationrequests';
	protected $table = 'reservationrequests ';


	protected $allowedColumns = [
		'requestId',
		'name',
		'date',
		'startTime',
		// 'hours',
		'endTime',
		'hours',
		'headCount',
		'sounds',
		'standings',
		'message',
		// 'amount',
		// 'status',
		// 'reservationistId',

	];

	public function validate($data)
	{
		// echo "inside validate function";
		$this->errors = [];

		// if(empty($data['requestId']))
		// {

		// $this->errors['requestId'] = "reqId is required";
		// }


		if (empty($data['name'])) {

			$this->errors['name'] = "Full name is required";
		}


		if (empty($data['date'])) {
			$this->errors['date'] = "Date is required";
		}

		if (empty($data['startTime'])) {
			$this->errors['startTime'] = "startTime is required";
		}


		if (empty($data['endTime'])) {
			$this->errors['endTime'] = "endTime is required";
		}
		if (empty($data['hours'])) {
			$this->errors['hours'] = "hours is required";
		}



		// $data['hours'] = calculateTimeDifference($data['startTime'],$data['endTime']);



		// function calculateTimeDifference($startTime, $endTime)
		// {
		//     $startTimeInSeconds = strtotime($startTime);
		//     $endTimeInSeconds = strtotime($endTime);

		//     $differenceInSeconds = $endTimeInSeconds - $startTimeInSeconds;

		//     $hours = floor($differenceInSeconds / 3600);
		//     $minutes = floor(($differenceInSeconds % 3600) / 60);
		//     $seconds = $differenceInSeconds % 60;

		//     $result = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

		//     return $result;
		// }




		// if(empty($data['endTime']))
		// {
		// $this->errors['endTime'] = "endTime is required";
		// $data['endTime']=$data['startTime']+$data['hours']:00:00;
		// }


		if (empty($data['headCount'])) {
			$this->errors['headCount'] = "headCount is required";
		}



		if (empty($data['sounds'])) {
			$this->errors['sounds'] = "sounds is required";
		}
		// else if($data['sounds']=="YES")
		// {
		// 	$data['sounds'] = 1;
		// }


		if (empty($data['standings'])) {
			$this->errors['standings'] = "standings is required";
		}

		if (empty($data['message'])) {
			$this->errors['message'] = "message is required";
		}

		// if(empty($data['email']))
		// {
		// 	$this->errors['email'] = "Email is required";
		// }else
		// if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		// {
		// 	$this->errors['email'] = "Email is not valid";
		// }


		// if(empty($data['contactNumber']))
		// {
		// 	$this->errors['contactNumber'] = "contactNumber is required";
		// }
		// else
		// if(!filter_var($data['contactNumber'],FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]{10}$/"))))
		// {
		// 	$this->errors['contactNumber'] = "contactNumber is not valid";
		// }


		// if(empty($data['nic']))
		// {
		// 	$this->errors['nic'] = "NIC is required";
		// }

		// if(empty($data['password']))
		// {
		// 	$this->errors['password'] = "Password is required";
		// }


		// if(empty($data['confirmPassword']))
		// {
		// 	$this->errors['confirmPassword'] = "Password is required";
		// }else
		// if($data['confirmPassword'] !== $data['password']){
		//     show('abc');
		// 	$this->errors['confirmPassword'] = "Passwords do not match";
		// }


		if (empty($this->errors)) {
			return true;
		}

		return false;


		//// return true;
	}
}
