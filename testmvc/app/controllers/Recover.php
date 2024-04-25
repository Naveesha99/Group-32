<?php
header("Cache-Control: no-cache");

Class Recover
{
    use Controller;

    public function index()
    {
        $data = [];
        if(isset($_POST['email']) && isset($_POST['phone']))
        {
            $order = new Orders;

            $arr['email'] = $_POST['email'];
            $arr['phone'] = $_POST['phone'];
            $arr['order_id'] = '000000';

            if($order->validate($arr))
            {
                $arr2['email'] = $_POST['email'];
                $arr2['phone'] = $_POST['phone'];

                $rows = $order->where($arr2);
                // show($rows);
                if($rows)
                {
                    $data['rows'] = $rows;
                }
                else
                {
                    $order->errors['not_data'] = "Booking details not found to your given email and phone number.";
                    $data['errors'] = $order->errors;
                }
            }
            else
            {
                $data['errors'] = $order->errors;
            }
        }
        // else
        // {
        //     echo 'nooooooo';
        // }
        

        $this->view('/ticket_booking/recover', $data);
    }
}