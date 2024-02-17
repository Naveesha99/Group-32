<?php

class Payment
{
    use Controller;

    public function index()
    {
        
        // show($_POST);
        if(isset($_POST['selectedSeats']))
        {
                $selectedSeatsArray = json_decode($_POST['selectedSeats']);
            
            // Check if decoding was successful
            if ($selectedSeatsArray !== null) 
            {                
                $temp=$this->change_status($selectedSeatsArray, $_POST['drama_id'], $_POST['date'], $_POST['time'] ,$_POST['status'], $_POST['totalPrice'], $_POST['table']);
                $data['release'] = $temp;
                $this->view('/ticket_booking/payment', $data);
            } 
            else 
            {
                // Handle JSON decoding error
                echo 'Please select the seats....!';
                // $this->view('/ticket_booking/payment');
            }
        }


        // __________________Data coming from Ajax when clicking the Go to Payment button_________________________________--

        if(isset($_POST['release']))
		{
            // show($_POST['release']);
            $releaseData = json_decode($_POST['release'][0], true);
            // $releaseData1 = json_decode($_POST['release'][1], true);

            //  show($releaseData);
            $counts = count($releaseData);
        

            $data2['username']=$_POST['username'];
            $data2['email']=$_POST['email'];
            $data2['phone']=$_POST['phone'];
           
            if($releaseData[0]=='table1')
            {
                $timeslot1 = new Timeslot1;

                for($i=2; $i<$counts; $i++)
                {
                    $dta = $releaseData[$i]['id'];
                    $timeslot1->update($dta, $data2);
                }
            }
            $this->view('/ticket_booking/payment');
        }

    }



    private function change_status($selectedSeatsArray, $drama_id, $date, $time ,$status, $price, $table)
    {
        
        if($table=='table1' && $status== 'free')
        {
            
            $timeslot1 = new Timeslot1();

            $i = 2;
            foreach ($selectedSeatsArray as $seat)
            {
                
                $arr['seat_id']= $seat;
                $arr['drama_id']= $drama_id;
                $arr['date']= $date;
                $arr['time']= $time;

                $data1['status']='booked';


                    $data = $timeslot1->where($arr);

                    $id=$data[0]->id;
                

                    if($data[0]->status== 'free')
                    {
                        $release[0]='table1';
                        $release[1]=$price;
                        // show($release[1]);
                        $timeslot1->update($id, $data1);
                        echo'successfully temporarily booked '.$data[0]->seat_id.'<br>';
                        $release[$i]=$data[0];
                        $i=$i+1;
                        
                    }
                    else
                    {
                        echo 'Already booked you selected seats while your seats selection time<br>';
                        redirect('seat_map');
                    }
                
            }
            return $release;
        }


            if($table=='table2' && $status== 'free')
            {
                $timeslot2 = new Timeslot2();
    
                foreach ($selectedSeatsArray as $seat) 
                {
                    
                    $arr['seat_id']= $seat;
                    $arr['drama_id']= $drama_id;
                    $arr['date']= $date;
                    $arr['time']= $time;
    
                    // $data1['drama_id']=$_POST['drama_id'];
                    // $data1['date']=$_POST['date'];
                    // $data1['time']=$_POST['time'];
                    // $data1['seat_id']=$seat;
                    $data1['status']='booked';
    
    
                    $data = $timeslot2->where($arr);
    
                    foreach ($data as $key)
                    {			
                        unset($key->drama_id);
                        unset($key->seat_id);
                        unset($key->date);
                        unset($key->time);
                        unset($key->status);
                    }
    
                    $id=$key->id;
                  
                    $timeslot2->update($id, $data1);
                    
                }
    
            }
       

        if($table=='table3' && $status== 'free')
        {
            $timeslot3 = new Timeslot3();

            foreach ($selectedSeatsArray as $seat) 
            {
                
                $arr['seat_id']= $seat;
                $arr['drama_id']= $drama_id;
                $arr['date']= $date;
                $arr['time']= $time;

                // $data1['drama_id']=$_POST['drama_id'];
                // $data1['date']=$_POST['date'];
                // $data1['time']=$_POST['time'];
                // $data1['seat_id']=$seat;
                $data1['status']='booked';


                $data = $timeslot3->where($arr);

                foreach ($data as $key)
                {			
                    unset($key->drama_id);
                    unset($key->seat_id);
                    unset($key->date);
                    unset($key->time);
                    unset($key->status);
                }

                $id=$key->id;
             
                $timeslot3->update($id, $data1);
                
            }
        }        
    }

    // eliminate or permanatly update temporarily booking seats
    private function release_seat($key)
    {
        show($key[0]);
        if($key[0]->time =='09:00:00')
        {
            $timeslot1 = new Timeslot1();

            // $arr['id'] = $key->id;
            $arr['drama_id'] = $key[0]->drama_id;
            $arr['seat_id'] = $key[0]->seat_id;
            $arr['date'] = $key[0]->date;
            $arr['time'] = $key[0]->time;
            $arr['status'] = 'free';

            $timeslot1->update($key[0]->id,$arr);
            echo'SUCCESS SEAT RELEASE';
        }

        if($key[0]->time =='11:00:00')
        {
            $timeslot2 = new Timeslot2();

            // $arr['id'] = $key->id;
            $arr['drama_id'] = $key[0]->drama_id;
            $arr['seat_id'] = $key[0]->seat_id;
            $arr['date'] = $key[0]->date;
            $arr['time'] = $key[0]->time;
            $arr['status'] = 'free';

            $timeslot2->update($key[0]->id,$arr);
            echo'SUCCESS SEAT RELEASE';
        }

        if($key[0]->time =='04:00:00')
        {
            $timeslot3 = new Timeslot3();

            // $arr['id'] = $key->id;
            $arr['drama_id'] = $key[0]->drama_id;
            $arr['seat_id'] = $key[0]->seat_id;
            $arr['date'] = $key[0]->date;
            $arr['time'] = $key[0]->time;
            $arr['status'] = 'free';

            $timeslot3->update($key[0]->id,$arr);
            echo'SUCCESS SEAT RELEASE';
        }

    }

    private function details_form($username, $email, $phone)
    {
        if(isset($email))
		{
            if($_POST['table']=='table1')
            {
                $timeslot1 = new Timeslot1;
                foreach($_POST['selectedSeats'] as $x);
                {
                    // show($x);
                }
                // $timeslot1->update()
            }
		}
        else
        {
            echo 'Data not coming';
        }
    }
}