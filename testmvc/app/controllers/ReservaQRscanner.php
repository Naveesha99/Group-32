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

        $this->view('reservaQRscanner', $data);
    }
}

