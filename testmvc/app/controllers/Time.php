<?php

/**
 * home class
 */
class Time
{
    use Controller;

    public function index()
    {

        $booking = new Booking();

        // show($_POST);
        $result = $booking->where($_POST);

        $response = json_encode($result);

        header('Content-Type: application/json');
        
        echo $response;
        //show($response);
        // $data['data2'] = $response;

		// $this->view('/ticket_booking/select_drama', $data);

    }
}
