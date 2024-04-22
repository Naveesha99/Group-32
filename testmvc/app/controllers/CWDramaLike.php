<?php

/**
 *  cw drama portal
 */
class CWDramaLike
{
	use Controller;

	public function index()
	{

        $article = new Article();

        $articleId['id'] =  $_POST['id'];
        
        $result  =  $article->first($articleId);
        
        $data = [];

        if($_POST['likes'] == "true"){

           $data['likes'] =  $result->likes + 1;
            
        }       
        else{

           $data['likes'] =  $result->likes - 1;
            
        }

        
       $article->update($_POST['id'],$data);

     //  echo json_encode($data);



	}
}
