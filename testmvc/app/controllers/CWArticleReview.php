<?php

/**
 * add article class

 */

class CwArticleReview
{
    use Controller;

    public function index()
    {

        $article = new article;
        $result = $article->findArticlesByStatus(1);
        $data = $result;

        $this->view('contentwriter/cwArticleReview', $data);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['delete_article'])) {
                $articleId = $_POST['delete_article'];
                $this->articleDelete($articleId, $article);
            }

            // if (isset($_POST['update_article'])) {
            // 	unset($_POST['update_article']);
            // 	$this->articleUpdate($_POST, $article);
            // }

            if (isset($_POST['view'])) {
                $articleId = $_POST['view'];
                $this->articleView($articleId, $article);
            }
        }
    }

    private function articleView($data, $article)
    {
        $articleData = $article->findArtcleById($data);

        if ($articleData) {
            $this->view('contentwriter/cwViewOwnArticle', $articleData);
        } else {

            echo "Article not found!";
        }
    }

    private function articleDelete($data, $article)
    {
        $article->delete($data, 'id');
        redirect("contentwriter/cwArticleDisplay");
    }

    // private function articleUpdate($data, $article)
    // {
    // 	if (isset($data['id'])) {
    // 		$id = $data['id'];
    // 		unset($data['id']);
    // 		$article->update($id, $data, 'id');
    // 	}
    // }
}
