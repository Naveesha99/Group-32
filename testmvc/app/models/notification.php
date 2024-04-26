<?php

class Notification
{
    use Model;

    protected $table = 'notification';

    protected $allowedColumns = [
        'id',
        'target_userID',
        'message',
        'isRead',
    ];
}