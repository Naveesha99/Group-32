<?php

/**
 * home class
 */
class addDrama
{
    use Controller;

    public function index()
    {
        $data = [];
        
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{

			$home = new Homes;

            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['image'] = $_POST['image'];


            if($home->validate($data))
            {
                //_______add drama into home table_________
                $arr['title'] = $_POST['title'];
                $arr['description'] = $_POST['description'];
                $arr['image'] = $_POST['image'];
				$home->insert($arr);

            }
            else
            {
                $data['errors'] = $home->errors;   
            }

		}

		$this->view('admin/adddrama', $data);
    }
}