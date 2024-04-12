<?php

/**
 * edit article  class
 */

class CWEditArticle
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
        $data = [];

        $articleId = isset($_GET['id']) ? $_GET['id'] : null;
        // echo $articleId;
        $article = new Article;

        if ($articleId) {
            $arr1['id'] = $articleId;

            $articleData = $article->where($arr1);

            if ($articleData) {

                $data['article'] = $articleData;
                // show($data);

            } else {
                echo "Article not found.";
                exit();
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {


            if (isset($_POST['save_draft'])) {
                $_POST['status'] = 0;
                $article->update($articleId, $_POST, 'id');
                redirect('cwDraft');
            }
        }

        if (isset($_POST['submit_article'])) {
            $_POST['status'] = 1;
            $_POST['progress'] = 'pending';
            $article->update($articleId, $_POST, 'id');
            redirect('cwArticleReview');
            
        }


        // redirect('cwArticleDisplay');


        $this->view('contentwriter/cwEditArticle', $data);
    }
}
