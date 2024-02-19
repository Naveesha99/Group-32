<?php

/**
 * Display article class
 */
class ReservaHall1Edit
{
	use Controller;
	public function index()
	{
		$datareq=new Reservationrequests;
		$result = $datareq->findAll();
		$data=$result;
		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		// $this->view('cwArticleDisplay');
		// $article = new article;
		// $result = $article->findAll();
		// $data = $result;



		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$reservationequests = new Reservationrequests;

			$arrOrder = [  
                    'name' => $_POST['name'],'hours' => $_POST['hours'],'sounds' => $_POST['sounds'],'standings' => $_POST['standings'],
					'message' => $_POST['message'] ]; 
             
			
	 
		 
			show($_POST);
			
			
			if($reservationequests->validate($_POST))
			{
				show($_POST);
				$update1 = $reservationequests->update($_POST['id'], $arrOrder);
				redirect('reservaSentReq');
		
			}
	
			$data['errors'] = $reservationequests->errors;			
			}

		$this->view('reservaHall1Edit' , $data);
	}

	// public function cwViewOwnArticle($articleId)
	// {
	// 	$article = new article;
	// 	$articleData = $article->where(['id' => $articleId]); 
	// 	$this->view('contentwriter/cwViewOwnArticle', $articleData);
	// }

	// public function delete()
	// {
	// 	if (isset($_POST['id'])) {
	// 		$articleId = $_POST['id'];
	// 		$article = new article;
	// 		$article->delete($articleId);
	// 		redirect("cwArticleDisplay");
	// 	}
	// }

}
