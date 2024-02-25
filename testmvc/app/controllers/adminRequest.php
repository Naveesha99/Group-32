<?php


class adminRequest
{
    use Controller;

    public function index()
    {

        $this->view('admin/adminrequest');
    }
}