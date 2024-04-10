<?php

/**
 * home class
 */
class example
{
    use Controller;

    public function index()
    {
        // show($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $email = $_POST['email'];
            // show($email);
            $sendMail = new SendMail;
            $sendMail->sendVerificationEmail($email);
        }
        $this->view('example');
    }
}

