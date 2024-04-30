<?php

/**
 * home class
 */
class Front_desk
{
    use Controller;

    public function index()
    {
        $data = [];
        $booking = new Booking;

        $rows = $booking->findAll();

        if($rows)
        {
            foreach($rows as $x)
            {
                $db_date = new DateTime($x->date);
                $today = new DateTime();

                if ($db_date >= $today) 
                {
                    $data1[] = $x;
                }
            }
            $data['days'] = $data1;
        }
        // show($data['days']);
        $this->view('/ticket_booking/front_desk', $data);
    }
}

