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
        'status',

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

        if (empty($data['image'])) {
            $this->errors['image'] = "Image is required";
        }



        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    public function getDraftArticles(){
        $query= "SELECT * FROM $this->table WHERE status =0";
        return $this->query($query);
    }

    public function findPublishArticles(){
        $query = "SELECT * FROM $this->table WHERE status =1 ";
        return $this->query($query);
    }
}
