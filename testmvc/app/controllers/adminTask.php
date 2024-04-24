<?php

class adminTask
{
    use Controller;

    public function index()
    {
        $this->view('admin/adminTask');
    }
}