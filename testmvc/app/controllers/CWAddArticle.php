<?php

/**
 * add article class

 */

class CWAddArticle
{
    use Controller;

    public function index()
    {

        $username = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->username;
        $id = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;
        // echo $id;

        $data = [];

        $article = new Article;
        

        if (isset($_POST['save_draft'])) {
            $_POST['status'] = 0;
            $_POST['cwName'] = $username;
            $_POST['cw_id'] = $id;
            if ($article->validate($_POST)) {

                $article->insert($_POST);
                redirect('cwDraft');
            }
        }

        if (isset($_POST['submit_article'])) {
            $_POST['cwName'] = $username;
            $_POST['cw_id'] = $id;
            $_POST['status'] = 1;
            $_POST['progress'] ='pending';
            if ($article->validate($_POST)) {
                $category->insert($_POST);
                $article->insert($_POST);
                // $this->$article['catId'] =$this->$category['id'];
                redirect('cwArticleReview');
            }
        }



        $data['errors'] = $article->errors;
        // show($_POST);
        $this->view('contentwriter/CWAddArticle', $data);
    }
}
