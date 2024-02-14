<?php

/**
 * add article class

 */

class CWAddArticle
{
    use Controller;

    public function index()
    {
        $data = [];

        $article = new Article;
        if ($article->validate($_POST)) {
            $article->insert($_POST);
            redirect('contentwriter/cwArticleDisplay');
        }

        $data['errors'] = $article->errors;
        // show($_POST);
        $this->view('contentwriter/CWAddArticle', $data);
    }
}
