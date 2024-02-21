<?php

/**
 * home class
 */
class Payment2
{
    use Controller;

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
    
            // Retrieve the data sent from the client
            $releaseData = json_decode($_POST['release'], true);
            $ary['data']=$releaseData;
            $count = count($ary['data']);
            // show($count);

            // show($ary['data']);

            if($ary['data'][0]== 'table1')
            {
                for ($i = 2; $i < $count; $i++) 
                {
                    
                    $timeSlot1 = new Timeslot1;

                    $id = $releaseData[$i]['id'];
                    $data3['drama_id'] = $releaseData[$i]['drama_id'];
                    $data3['date'] = $releaseData[$i]['date'];
                    $data3['time'] = $releaseData[$i]['time'];
                    $data3['seat_id'] = $releaseData[$i]['seat_id'];
                    $data3['username']=NULL;
                    $data3['email']=NULL;
                    $data3['phone']=NULL;
                    $data3['price']=NULL;
                    $data3['status'] = 'free';   
                    
                    $timeSlot1->update($id, $data3);

                }
                echo 'seats are released';
                // redirect('seat_map');                        
            }
            else
            {
                echo 'not released';
            }
            
        } 
        else {
            // Handle other types of requests or show an error
            http_response_code(400); // Bad Request
            echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
        }
    }
}
