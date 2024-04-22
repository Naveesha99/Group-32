<?php
/**
 * profile image class
 */

class ProfileImg
{
    use Model;

    protected $table = 'profileimgs';

    protected $allowedColumns =[
        'id',
        'userid',
        'status',

    ];

}