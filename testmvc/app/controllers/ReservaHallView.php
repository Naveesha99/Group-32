<?php 

// session_start();
class ReservaHallView
{
	use Controller;

	public function index()
	{
		if(isset($_SESSION['USER'])){
			show($_SESSION['USER']->username);
		}

		//het hallno parameter from url and assign it to halid variable
		$hallId = isset($_GET['hallno']) ? $_GET['hallno'] : '';


		$sentReq=new ReservationRequests;
		$req=[
			'hallno'=>$hallId,
			'status'=>'accepted'
		];
		// $result=$sentReq->findAll();
		$result=$sentReq->where($req);
		// $data=$result;

		$facilities= new Facilities;
		$facilities1=$facilities->findAll();

		$hallfacilities = new HallFacilities;
		$hallfac=[
			'hallno'=>$hallId
		];
		$hallfacilities1=$hallfacilities->where($hallfac);
		// $hallfacilities1=$hallfacilities->findAll();

		$halls= new Hall;
		$halldetails=[
			'hallno'=>$hallId
		];
		$halls1=$halls->where($halldetails);


		
		$data=[
			'halls'=>$halls1,
			'facilities'=>$facilities1,
			'hallfacilities'=>$hallfacilities1,
			'reqs'=>$result
		];

		// show($data);
		$this->view('reservaHallView',$data);
	}

}
