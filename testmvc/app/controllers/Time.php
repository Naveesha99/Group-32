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

        $result = $booking->where($_POST);

        $response = json_encode($result);

        header('Content-Type: application/json');
        
        echo $response;

    }
}
