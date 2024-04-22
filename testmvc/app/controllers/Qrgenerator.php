<?php

/**
 * home class
 */
class Qrgenerator
{
    use Controller;

    public function index()
    {
        $data = [];

                if(isset($data3))
                {
                    show($data3);

                    $order_id = $data3['order_id'];
                    $payment = $data3['payment'];
                    $email = $data3['email'];
                    $drama_id = $data3['drama_id'];
                    $drama_date = $data3['drama_date'];
                    $drama_time = $data3['drama_time'];
                    $seat_id = $data3['seat_id'];

                    $data['order_id'] = $order_id;
                    $data['payment'] = $payment;
                    $data['email'] = $email;
                    $data['drama_id'] = $drama_id;
                    $data['drama_date'] = $drama_date;
                    $data['drama_time'] = $drama_time;
                    $data['seat_id'] = $seat_id;
                }
        $this->view('/ticket_booking/qrgenerator', $data);
    }
}
