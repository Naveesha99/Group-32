<?php

/**
 * category class
 */

class Category
{
    use Model;

    protected $table = 'categories';

    protected $allowedColumns =[
        'id',
        'category',

    ];

    public function validate($data)
    {
        $this->errors=[];

        if(empty($data['category'])){
            $this->errors['category'] ='Category is required';
        }

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    public function findBy($column, $value)
    {
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        $params = [':value' => $value];
        return $this->query($query, $params);
    }



    
    


}