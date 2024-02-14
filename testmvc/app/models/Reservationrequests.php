<?php


/**
 * Reservationrequests class
 */
class Reservationrequests
{

	use Model;
	// Method to fetch hall details
	public function getHallDetails($hallno)
	{
		$hallModel = new Hall;
		// $tableName = 'hall'; // Replace this with the actual table name in your database
    	// $query = "SELECT hallId FROM $hallModel WHERE hallno = :hallno";

        // Assuming you have a method in your Hall model to fetch details by hallId
        // $hallDetails = $hallModel->findAll($hallno);
		// show($hallDetails);
		// $query = "SELECT hallno,amountOneHour, amountSounds,amountStandings FROM $tableName WHERE hallno = '$hallno'";
		// show($query);
        // return $query;
		// $result = $kdbConnection->query($query);

	}

	public function getAvailableTimeSlots($selectedDate)
    {
        // Implement your logic to fetch available time slots from the database
        // Example:
		// $query = "SELECT startTime, endTime FROM $this->table WHERE date = $selectedDate";
		// show($query);

    }

// Inside Reservationrequests model

// public function getBookedTimeSlots($date)
// {
// 	echo '<script>console.log(" in getbooktimeslots");</script>';
//     $query = "SELECT startTime, endTime FROM $this->table WHERE date = :date";
//     $data = ['date' => $date];

//     return $this->query($query, $data);
// }


	// protected $table = 'reservationrequests';
	protected $table = 'reservationrequests ';


	protected $allowedColumns = [
		'requestId',
		'hallno',
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
		'status',
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

		if(empty($data['hallno']))
		{

		$this->errors['hallno'] = "hallno is required";
		}

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

		if(empty($data['status']))
		{
			$data['status'] = 'status is required';
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
