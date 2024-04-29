<?php

class CWDrafts
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

        $drafts = [];

        if($cwId){
            $arr1['cw_id'] = $cwId;
            $articleData = $article->where($arr1);

            if($articleData){
                $drafts =array_filter($articleData, function($article){
                    return $article->status == 0 ;
                });
            }
        }

        $data['drafts'] = $drafts;
        $this->view('contentwriter/cwDrafts',$data);
    }
}