<?php

/**
 * User class
 */
class ArticleLikes
{
    use Model;

    protected $table = 'likes';

    protected $allowedColumns = [

        'id',
        'cwName',
        
        'articleId',

    ];
}