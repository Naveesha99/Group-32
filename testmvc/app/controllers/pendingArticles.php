<?php

class pendingArticles
{
    use Controller;

    public function index()
    {
        $arr1['progress'] = 'pending';
        $article = new Article();
        $result = $article->where($arr1);
        $data['pending'] = $result;
        // show($data);
        $this->view('admin/pendingArticles', $data);
    }
}