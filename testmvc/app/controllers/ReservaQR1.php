<?php 


class ReservaQR1
{

	use Controller;

	public function index()
	{


		if(empty($_SESSION['USER'])){
			redirect('reservalogin');
			exit();
		}
		$data = [];
		
	

			$sentReq=new Reservationrequests;
            $hall=new Hall;
        
			$data1=$sentReq->findall();
            $data2=$hall->findall();

            $data=[
                'reservationrequests'=>$data1,
                'hall'=>$data2
            ];

			$this->view('reservaQR', $data);

		
        }
		
	}



