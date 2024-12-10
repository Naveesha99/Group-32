<?php

/**
 *  cw drama portal
 */
class CW
{
	use Controller;

	public function index()
	{
      


		$cwId = $_SESSION(['USER'])->id;


        $like = new Like();

        $articleId['id'] =  $_POST['id'];
        
        
        $data = [];

        if($_POST['likes'] == "true"){

           $data['cwId'] =  $cwId;
           $data['articleId'] = $_POST['id'];
            
        }       
        else{

            $data['cwId'] =  $cwId;
            $data['articleId'] = $articleId['id'];
            
        }

        
        $like->insert($data);

      //echo json_encode($data);



	}
}
