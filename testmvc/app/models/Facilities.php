<?php

/**
 * User class
 */
class Facilities
{
    use Model;

    protected $table = 'facilities';

    protected $allowedColumns = [

        'id',
        'icon',
        'name',

    ];

    public function validate($data)
    {
        $this->errors = [];

        // if (empty($data['icon'])) {
        //     $this->errors['facility_name'] = "Facility Icon is required";
        // }

        if (empty($data['name'])) {
            $this->errors['name'] = "Name is required";
        }

        
        if (empty($this->errors)) {
            return true;
        }

        return false;
    }


}