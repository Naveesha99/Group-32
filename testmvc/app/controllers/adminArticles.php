<?php

class adminArticles
{
    use Controller;

    public function index()
    {

        $article = new Article();
        $arr1['progress'] = 'accepted';
        $result = $article->where($arr1);
        
        foreach ($result as $item) {
            $date = $item->acceptedAt;
            $createdAt = strtotime($date);
            $sevenDaysAgo = strtotime('-7 days');
            if ($createdAt >= $sevenDaysAgo) {
                $dataPoints[] = array("y" => $item->likes, "label" => $item->article_name);
            }
        }
        $data['dataPoints'] = $dataPoints;

        $this->view('admin/adminArticles', $data);
    }
}