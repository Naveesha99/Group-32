<?php

class forgotPW
{
    use Controller;

    public function index()
    {
        $user = new User;
        $result = $user->findAll();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            foreach($result as $row){
                if($row->email == $_POST['email']){
                    $otp = mt_rand(100000, 999999);
                    $email = $row->email;
                    $name = $row->fullname;
                    $sendMail = new SendMail;
                    $sendMail->sendOTP($email, $name, $otp);
                    $_POST['otp'] = $otp;
                    $sendOTP = new sendOTP;
                    $sendOTP->insert($_POST);
                }
            }
        }
        $this->view('password/forgotPW');
    }
}