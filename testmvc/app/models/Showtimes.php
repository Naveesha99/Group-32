<?php

class Showtimes
{
    use Model;

    protected $table = 'showing_slots';

    protected $allowedColumns = [
        'id',
        'time',
    ];
}