<?php

/**
 * home class
 */
class Qrscanner
{
    use Controller;

    public function index()
    {
        $data = [];

        if(isset($_POST['qrdata']))
        {
            $arr['order_id'] = $_POST['qrdata'];
            show($_POST['qrdata']);
            $order = new Orders;

            $data['row'] = $order->first($arr);
        }

        $this->view('ticket_booking/qrscanner', $data);
    }
}

