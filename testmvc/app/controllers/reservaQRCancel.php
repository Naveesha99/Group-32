<?php 


class reservaQRCancel
{

	use Controller;

	public function index()
	{


		if(empty($_SESSION['USER'])){
			redirect('reservalogin');
			exit();
		}
		$data = [];
		
	
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['reqid'])){
        $id=$_POST['reqid'];
        $sentReq=new Reservationrequests;
        $find=[
            'id'=>$_POST['reqid']
        ];
       $arr=[
              'status'=>'cancelled',
              'refundedAmount'=>$_POST['refund']    
         ];
       
       
       $sentReq->update($id,$arr);
       
       $result=$sentReq->where($find);
       $data=[
        'detailsofReq'=>$result
    ];

       
    }
        }
        $this->view('reservaQRCancel', $data);

		
	}
}