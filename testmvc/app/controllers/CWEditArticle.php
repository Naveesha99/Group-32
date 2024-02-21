<?php

/**
 * edit article  class
 */

class CWEditArticle
{
    use Controller;

    public function index()
    {
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
            $article->update($articleId, $_POST, 'id');
            redirect('contentwriter/cwAddArticle');
        }

        $this->view('contentwriter/cwEditArticle', $data);
    }
}
