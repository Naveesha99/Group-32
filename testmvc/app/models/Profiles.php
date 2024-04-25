<?php
/**
 * profile image class
 */

class Profiles
{
    use Model;

    protected $table = 'profiles';

    protected $allowedColumns =[
        'id',
        'userid',
        'name',
        'images',

    ];

    
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['name'])) {
            $this->errors['name'] = " Name is required";
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