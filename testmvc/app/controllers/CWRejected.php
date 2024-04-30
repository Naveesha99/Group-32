<?php

class CWRejected
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

        $cwId = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->id;
        $article = new Article;

        $rejected = [];

        if ($cwId) {
            $arr1['cw_id'] = $cwId;
            $articleData = $article->where($arr1);

            if ($articleData) {
                $rejected = array_filter($articleData, function ($article) {
                    return $article->status == 1 && $article->progress == 'rejected';
                });
            }
        }

        $data['rejected'] = $rejected;
        if ($_SESSION['USER']->user_type == 'Content Writer') {
            $this->view('contentwriter/cwRejected', $data);
        }
    }
}
