<?php

class CWPending
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

        $cwId= empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;
		$article = new Article;

        $pending = [];

        if($cwId){
            $arr1['cw_id'] = $cwId;
            $articleData = $article->where($arr1);

            if($articleData){
                $pending =array_filter($articleData, function($article){
                    return $article->status == 1 && $article->progress == 'pending';
                });
            }
        }

        $data['pending'] = $pending;
        $this->view('contentwriter/cwPending',$data);
    }
}