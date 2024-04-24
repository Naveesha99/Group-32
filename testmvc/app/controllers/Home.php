<?php 
header("Cache-Control: no-cache");
/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{

		$booking = new Booking;

		$row= $this->get_drama_img();

		$i=0;
		foreach($row as $key)
		{			
			
			$arr['drama_id'] = $key->id;
			

			// show($arr['id']);
			$row2 = $booking->where($arr);
			// show($row2);
			if ($row2 !== false && is_array($row2))
			{

				foreach($row2 as $k)
				{
					$data['data2'][$i] = $k;
					$i=$i+1;
				}
			}
							
		}


		$data['data1']= $row;
       
        $this->view('home', $data);
	}

	private function get_drama_img()
	{
		$home = new Homes;

		$row = $home->findAll();
		// $datax[0]=$row;

		
		// foreach ($row as $key)
		// {			
		// 	$datax[$i] = $booking->where($key->id);
		// 	show($datax[$i]);
		// 	$i++;
		// 	// unset($key->title);
		// 	// unset($key->description);
		// }

		return $row;
	}
}

