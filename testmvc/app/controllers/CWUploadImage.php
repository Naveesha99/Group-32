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

        $data['userid'] = $this->UserId($profile);
        show($data);

        foreach ($data['userid'] as $key) {

			if($id === $key){
                echo 'image is uploaded';
            }
            else{
                echo 'no user';
            }
		}


		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		// $this->view('cwArticleDisplay');
		// $article = new article;
		// $result = $article->findPublishArticles();


		// $data = $result;

		$this->view('contentwriter/cwUploadImage');
    }

    private function UserId($profile)
	{
		$result = $profile->findAll();
		foreach ($result as $key) {

			unset($key->id);
			unset($key->status);
			unset($key->Created_at);
		}
		show($result);
		return $result;
		// $data['jobs'] = $result;
		// $this->view('addemployee', $data);
	}


	
}
