<?php 


class ReservaNotifications
{
	use Controller;

	public function index()
	{

		if(empty($_SESSION['USER'])){
			redirect('reservalogin');
			exit();
		}


		$notification = new Notification();
        $arr['target_userID'] = $_SESSION['USER']->id;
        $result = $notification->where($arr);
        $data['notifications'] = $result;

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $sendData['isRead'] = 1;
            if($notification->update($id, $sendData)){
                redirect('reservaNotifications');
            }
        }

		$this->view('reservaNotifications', $data);

		// if (empty($_SESSION['USER'])) {
		// 	// Redirect or handle the case when the user is not logged in
		// 	// For example, you might want to redirect them to the login page
		// 	redirect('reservalogin');
		// 	exit();
		// }

		// $data = [];
		// $this->view('reservaNotifications',$data);
	}

}
