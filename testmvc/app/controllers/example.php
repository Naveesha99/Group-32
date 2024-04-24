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
            $email = 'lnaveesha4@gmail.com';
            $name = 'Lakshan Naveesha';
            $ticket_id = 'T123456';
            $path = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/ticket';
            $jpgFile = $path . '/' . $ticket_id . '.jpg';

            if (file_exists($jpgFile)) {
                show($jpgFile);
                $sendMail = new SendMail;
                $sendMail->sendTicketEmail($email, $name, $jpgFile, $ticket_id);
            } else {
                show($name);
                // JPG file does not exist
                // Your code here
            }
            // show($email);
        }
        $this->view('example');
    }
}
