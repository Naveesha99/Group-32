<?php

/**
 * add article class
 */

class Content_writer_addArticle
{
    use Controller;

    public function index()
    {
        $data = [];

        $article = new Article;
        if($article->validate($_POST))
        {
            $article->insert($_POST);

        }

        $data['errors'] = $article->errors;
        // show($_POST);
        $this->view('content_writer_addArticle',$data);
    }
}
