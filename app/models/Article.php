<?php

/**
 * Article class
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
}
