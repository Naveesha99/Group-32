<?php

/**
 * User class
 */
class Like
{
    use Model;

    protected $table = 'likes';

    protected $allowedColumns = [

        'id',
        'cwName',
        
        'articleId',

    ];
}