<?php

/**
 * home class
 */
class ReservaQRscanner
{
    use Controller;

    public function index()
    {
        $data = [];

        if(isset($_POST['qrdata']))
        {
            $arr['id'] = $_POST['qrdata'];
            // show($_POST['qrdata']);
            $order = new Reservationrequests;

            $data['row'] = $order->where($arr);
        }

        if(isset($_POST['status'])){
            $id=$_POST['reqid'];
            $sentReq=new Reservationrequests;
           $arr=[
                  'status'=>$_POST['status']  ,
             ];
           
           
           $sentReq->update($id,$arr);
                    
        }

        if(isset($_POST['isArrived'])){
            $id=$_POST['reqid'];
            $sentReq=new Reservationrequests;
            
        $arr=[
                'hasArrived'=>$_POST['isArrived']   ,
            ];
        
        
        $sentReq->update($id,$arr);
        redirect('home');
        }

        $this->view('reservaQRscanner', $data);
    }
}

