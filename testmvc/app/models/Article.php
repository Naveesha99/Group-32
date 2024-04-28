<?php

/**
 * User class
 */
class Article
{
    use Model;

    protected $table = 'articles';

    protected $allowedColumns = [

        'id',
        'article_name',
        'category',
        'article_content',
        'image',
        'cw_id',
        'cwName',
        'status',
        'progress',
        'likes',
        'catId',

    ];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['article_name'])) {
            $this->errors['article_name'] = "Article Name is required";
        }

        if (empty($data['category'])) {
            $this->errors['category'] = "Category is required";
        }

        if (empty($data['article_content'])) {
            $this->errors['article_content'] = "Article Content is required";
        }

        if (!empty($data['article_content']) && strlen($data['article_content']) < 400) {
            $this->errors['article_content'] = "Article Content must be at least 400 characters";
        }

        if (empty($data['image'])) {
            $this->errors['image'] = "Image is required";
        }



        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    public function getDraftArticles()
    {
        $query = "SELECT * FROM $this->table WHERE status =0";
        return $this->query($query);
    }

    public function findPublishArticles()
    {
        $query = "SELECT * FROM $this->table WHERE status =1 AND progress = 'accepted'";
        return $this->query($query);
    }

    public function publishDraftArticle($articleId)
    {
        $query = "UPDATE $this->table SET status = 1 WHERE id = :id AND status = 0";
        $params = array(':id' => $articleId);
        return $this->execute($query, $params);
    }

    public function findArticleById($articleId)
    {
        $query = "SELECT * FROM $this->table WHERE id=:id";
        $params = array(':id' => $articleId);
        return $this->query($query, $params);
    }

    public function findArticlesByStatus($status)
    {
        $query = "SELECT * FROM $this->table WHERE status = :status";
        $params = array(':status' => $status);
        return $this->query($query, $params);
    }

    public function findPublishArticlesByCategory($category)
    {
        $query = "SELECT * FROM $this->table WHERE status = 1 AND category = :category";
        $params = array(':category' => $category);
        return $this->query($query, $params);
    }

    public function findPublishArticlesByCategoryAndSearch($category, $searchQuery)
    {
        $query = "SELECT * FROM $this->table WHERE status = 1 AND category = :category AND (article_name LIKE :searchQuery OR article_content LIKE :searchQuery)";
        $params = array(':category' => $category, ':searchQuery' => "%$searchQuery%");
        return $this->query($query, $params);
    }
}
