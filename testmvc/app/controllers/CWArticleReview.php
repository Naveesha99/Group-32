<?php

/**
 * add article class

 */

class CwArticleReview
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
        $result = [];

        if ($cwId) {
            $arr1['cw_id'] = $cwId;
            $articleData = $article->where($arr1);
            if ($articleData) {

                $result = $articleData;
            } 
        }
        $data = $result;
        
        if($_SESSION['USER']->user_type == 'Content Writer'){
            $this->view('contentwriter/cwArticleReview', $data);
        }
        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['delete_article'])) {
                $articleId = $_POST['delete_article'];
                $this->articleDelete($articleId, $article);
            }
        }
    }


    private function articleDelete($data, $article)
    {
        $article->delete($data, 'id');
        redirect("contentwriter/cwArticleDisplay");
    }

    
}
