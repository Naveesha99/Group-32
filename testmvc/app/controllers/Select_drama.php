<?php

/**
 * Select_drama Class
 */

class Select_drama
{
	use Controller;
	public function index()
	{

				// show($_POST);
		if (!isset($_POST['id'])) 
		{
			redirect('home');
		}

		$dramaData = $this->eachDrama($_POST['id']);

		$data['data'] = $dramaData;

		$this->view('/ticket_booking/select_drama', $data);
	}

	private function eachDrama($id)
	{
		$home  = new Homes();
		$arr['id'] = $id;
		$data = $home->where($arr);
		return $data;	
	}

}