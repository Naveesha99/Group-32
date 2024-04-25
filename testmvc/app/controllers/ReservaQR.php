<?php 


class ReservaQR
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
			$id = isset($_GET['pay_id']) ? $_GET['pay_id'] : null;

			$detailsofReq = [
				'id' => $id,	
			];

			$sentReq=new Reservationrequests;
			$data=$sentReq->where($detailsofReq);
			$this->view('reservaQR', $data);

		}
		
        }
		
	}





