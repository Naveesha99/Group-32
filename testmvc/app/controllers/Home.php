<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{

		$row = $this->get_drama_img();

		$data['data']= $row;
       
        $this->view('home', $data);
	}

	private function get_drama_img()
	{
		$home = new Homes();
		$row = $home->findAll();
		foreach ($row as $key)
		{			
			// unset($key->title);
			unset($key->description);
		}
		// show($row);

		return $row;
	}
}

