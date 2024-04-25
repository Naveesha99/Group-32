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
                    $sendOTP = new sendOTP;
                    $arr = [
                        'email' => $email,
                        'otp' => $otp
                    ];
                    $sendOTP->insert($arr);
                    $url = ROOT . '/changePW?email=' . $email . '&otp=' . $otp;
                    $sendMail = new SendMail;
                    $sendMail->sendResetEmail($email, $url); 
                }
            }
        }
        $this->view('password/forgotPW');
    }
}