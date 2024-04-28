<?php

class viewPendingarticles
{
    use Controller;

    public function index()
    {
        $articleId = isset($_GET['id']) ? $_GET['id'] : null;

        // echo $articleId;

        if ($articleId) {
            $article = new Article;
            $arr1['id'] = $articleId;

            $articleData = $article->where($arr1);

            if ($articleData) {
                $data['article'] = $articleData;
                //show($data);
            } else {
                echo "article not found";
                exit();
            }
        }
        date_default_timezone_set('Asia/Colombo');
        $dateTime = new DateTime();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['accept_request'])) {
                $id = $data['article'][0]->id;
                $progress = $data['article'][0]->progress;
                if ($progress === 'pending') {
                    $arr1['progress'] = 'accepted';
                    $arr1['acceptedAt'] = $dateTime->format('Y-m-d H:i:s');
                    $article->update($id, $arr1);
                    redirect('pendingArticles');
                }
            }

            if (isset($_POST['reject_request'])) {
                $id = $data['article'][0]->id;
                $progress = $data['article'][0]->progress;
                if ($progress === 'pending') {
                    $arr1['progress'] = 'rejected';
                    $arr1['acceptedAt'] = $dateTime->format('Y-m-d H:i:s');
                    $article->update($id, $arr1);
                    redirect('pendingArticles');
                }
            }
        }
        $this->view('admin/viewPendingarticles', $data);
    }
}
