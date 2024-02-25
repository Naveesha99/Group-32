<?php

/**
 * add article class

 */

class CWAddArticle
{
    use Controller;

    public function index()
    {

        if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('login');
			exit();
		}

        $data = [];

        $article = new Article;

        if (isset($_POST['save_draft'])) {
            $_POST['status'] = 0;
            if ($article->validate($_POST)) {
                $article->insert($_POST);
                redirect('cwDraft');
            }
        }

        if (isset($_POST['submit_article'])) {
            $_POST['status'] = 1;
            if ($article->validate($_POST)) {
                $article->insert($_POST);
                redirect('cwArticleDisplay');
            }
        }



        $data['errors'] = $article->errors;
        // show($_POST);
        $this->view('contentwriter/CWAddArticle', $data);
    }
}
