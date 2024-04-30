<?php 
header("Cache-Control: no-cache");

/**
 * Seat_map class
 */
class Res_seat_map
{
	use Controller;

	public function index()
	{
		$data = [];
		if(isset($_POST['drama_id']) && isset($_POST['time']) && isset($_POST['date']))
		{
            $_SESSION['drama_id'] = $_POST['drama_id'];
            $_SESSION['time'] = $_POST['time'];
            $_SESSION['date'] = $_POST['date'];
           
            // show($_POST);

            $row1 = $this->get_price_byid($_SESSION['drama_id']);
            $data['get_price'] = $row1;

            $seat_data = $this->seat_status($_SESSION['date'], $_SESSION['time'], $_SESSION['drama_id']); 
            $data['get_seat'] = $seat_data;
            // show($data['get_price']);
                $arr['id'] =  $_SESSION['drama_id'];
            $homes = new Homes;
            $data['row'] = $homes->first($arr);
            
		


            // (1)____________________received selected seats from previous page(seat_map)_______________________________

            if(isset($_POST['selectedSeats']) && $_POST['name'] &&$_POST['phone'])
            {
                $selectedSeatsArray = json_decode($_POST['selectedSeats']);

                // Check if decoding was successful
                if ($selectedSeatsArray !== null) 
                {                
                    $temp=$this->change_status($selectedSeatsArray, $_POST['drama_id'], $_POST['date'], $_POST['time'] ,$_POST['status'], $_POST['totalPrice'], $_POST['name'] , $_POST['phone']);
                    $data['release'] = $temp;
                    // $this->view('/ticket_booking/payment', $data);
                }
                else 
                {
                    echo 'Please select the seats....!';
                }
            }
            else
            {
                $data['eer'] = "Phone number and name";
            }
        }
        
       $this->view('/ticket_booking/res_seat_map', $data);
	}


private function get_price_byid($drama_id)
	{
		$price = new Price();

		$arr['drama_id']=$drama_id;
		$row1 = $price->where($arr);

		foreach ($row1 as $key)
		{			
			unset($key->t_type);
		}
		return $row1;
	}


	private function seat_status($dates, $times, $ids)
	{
		if($times<='12:00:00')
		{
			$timeslot1 = new Timeslot1();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot1->where($arr);
			$result =['data'=>$data,'table'=>'table1'];
			return $result;
		}

		else if($times<='18:00:00')
		{
			$timeslot2 = new Timeslot2();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot2->where($arr);
			
			$result =['data'=>$data,'table'=>'table2'];
			return $result;
		}

		else if($times<='23:00:00')
		{
			$timeslot3 = new Timeslot3();

			$arr['time'] = $times;
			$arr['date'] = $dates;
			$arr['drama_id'] = $ids;

			$data = $timeslot3->where($arr);
			
			$result =['data'=>$data,'table'=>'table3'];
			return $result;
		}
		else
		{
			echo'Not Available';
		}
	}


    
    //_____________________________Change "free"status into "booked"___________________________________
    private function change_status($selectedSeatsArray, $drama_id, $date, $time ,$status, $price, $name, $phone)
    {
        
        if($time <= '12:00:00' && $status== 'free')
        {
            
            $timeslot1 = new Timeslot1;

            // $i = 2;
            foreach ($selectedSeatsArray as $seat)
            {
                
                $arr['seat_id']= $seat;
                $arr['drama_id']= $drama_id;
                $arr['date']= $date;
                $arr['time']= $time;

                $data1['username'] = $name;
                $data1['phone'] = $phone;
                $data1['status']='booked';
                $data1['price'] = $price;


                    $data = $timeslot1->first($arr);

                    $id=$data->id;
                

                    if($data->status== 'free')
                    {
                        $timeslot1->update($id, $data1);
                        // $data['success'] = 'Successfully booked seats';
                        echo 'Successfully booked seats';

                    }
                    else
                    {
                        // $data['success'] = 'These seats are in the paying process';
                        echo 'Unsuccessfull';
                    }
                
            }
            return $data['success'];
        }


            else if($time <= '18:00:00' && $status== 'free')
            {

                $timeslot2 = new Timeslot2;
                // $i=2;
    
                foreach ($selectedSeatsArray as $seat) 
                {
                    
                    
                    $arr['seat_id'] = $seat;
                    $arr['drama_id'] = $drama_id;
                    $arr['date'] = $date;
                    $arr['time'] = $time;
                    
                    $data1['username'] = $name;
                    $data1['phone'] = $phone;
                    $data1['status'] = 'booked';    
                    $data1['price'] = $price;
                    
                    $data = $timeslot2->first($arr);
                    
                    if($data !== false) 
                    { // Check if $data is not false
                        $id = $data->id;
                    
                        if($data->status == 'free') 
                        {
                            $timeslot2->update($id, $data1);
                            echo 'Successfully booked seats';
                        } 
                        else 
                        {
                            echo 'Unsuccessful';
                        }
                    } 
                    else 
                    {
                        echo 'No matching record found';
                    }
                    
                
                }
                // return $data;
    
            }
       

        else if($time <= '23:59:00' && $status== 'free')
        {
            
            $timeslot3 = new Timeslot3;

            // $i = 2;
            foreach ($selectedSeatsArray as $seat)
            {
                
                $arr['seat_id'] = $seat;
                $arr['drama_id'] = $drama_id;
                $arr['date'] = $date;
                $arr['time'] = $time;
                
                $data1['username'] = $name;
                $data1['phone'] = $phone;
                $data1['status'] = 'booked';
                $data1['price'] = $price;
                
                // Retrieve the record
                $datas = $timeslot3->first($arr);
                
                if ($datas !== false) 
                { // Check if $datas is not false
                    $ids = $datas->id;
                
                    // Check status of the first returned record
                    if ($datas->status == 'free') 
                    { // Change $data to $datas
                        $timeslot3->update($ids, $data1);
                        echo 'Successfully booked seats';
                    } 
                    else 
                    {
                        echo 'These seats are in the paying process';
                    }
                } 
                else 
                {
                    echo 'No matching record found';
                }  
                
            }
        }      
    }
}
