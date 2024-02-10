<?php 

/**
 * home class
 */
class AddCW
{
	use Controller;

	public function index()
	{

		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$content_writers = new Content_writers;
			if($content_writers->validate($_POST))
			{
			
				$content_writers->insert($_POST);
				redirect('adminemployee');
			}

			$data['errors'] = $content_writers->errors;			
		}

        $data['errors'] = $content_writers->errors;
        // show($_POST);
        $this->view('addCW',$data);


    }
}
