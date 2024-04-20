<?php

class ticketIncome
{
    use Model;

    protected $table = 'ticket_income';

    protected $allowedColumns = [
        'year',
        'month',
        'income',
    ];
}