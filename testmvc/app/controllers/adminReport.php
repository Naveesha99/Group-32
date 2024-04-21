<?php

class adminReport
{
    use Controller;

    public function index()
    {
        $data = [];
        $income = new ticketIncome();
        $result= $income->findAll();
        $data = $result;

        $this->view('admin/adminReport', $data);
    }
}