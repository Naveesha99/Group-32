<?php

/**
 * Display article class
 */
class CWUploadImage
{
	use Controller;
	public function index()
	{

		if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('cwLogin');
			exit();
		}

        $name = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->username;
        echo $name;
        $id = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;
        echo $id;


        $profile = new ProfileImg;
        // $result = $profile->findAll();
        // show($result);

        $status = $this->getUserIdStatus($profile, $id);
        show($status);

        if($status ==0){
			echo '<img src="<?=ROOT?>/assests/images/Upload/profil".$id.".jpeg?"".mt_rand()." alt="Default image">';


		}else{
			echo '<img src="<?=ROOT?>/assests/images/Upload/profiledfault.jpeg" alt="Default image">';
		}

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		// $this->view('cwArticleDisplay');
		// $article = new article;
		// $result = $article->findPublishArticles();


		// $data = $result;

		// $this->view('contentwriter/cwUploadImage');
    }

    private function getUserIdStatus($profile, $userId)
	{
		$result = $profile->findAll();
		foreach ($result as $key) {

			if($key->userid == $userId){
				$status= $key->status;
			}
		}
		show($status);
		return $status;
		// $data['jobs'] = $result;
		// $this->view('addemployee', $data);
	}


	
}
