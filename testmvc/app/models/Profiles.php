<?php
/**
 * profile image class
 */

class ProfileImg
{
    use Model;

    protected $table = 'profiles';

    protected $allowedColumns =[
        'id',
        'userid',
        'images',

    ];

    
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['article_name'])) {
            $this->errors['article_name'] = "Article Name is required";
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