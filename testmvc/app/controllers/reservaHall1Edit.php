<?php

/**
 * Display article class
 */
class ReservaHall1Edit
{
	use Controller;
	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('reservalogin');
			exit();
		}


		$datareq=new Reservationrequests;
		$result = $datareq->findAll();
		$data=$result;


		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$reservationequests = new Reservationrequests;

			$arrOrder = [  
                    'name' => $_POST['name'],'hours' => $_POST['hours'],'sounds' => $_POST['sounds'],'standings' => $_POST['standings'],
					'message' => $_POST['message'] ]; 
             
			
	 
		 
			// show($_POST);
			// show($arrOrder);
			// echo'<script> com</script>'
			
			
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
