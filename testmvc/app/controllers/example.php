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
            $email = "lnaveesha4@gmail.com";
            $subject = "Test mail";
            $message = "This is a test mail";
            $headers = "From: lakshannaveesha10@gmail.com";

            mail($email, $subject, $message, $headers);
        }
        $this->view('example');
    }
}
