<?php

class changePW
{
    use Controller;

    public function index()
    {
        $email = $_GET['email'];
        $otp = $_GET['otp'];
        $arr['email'] = $email;
        $sendOTP = new sendOTP;
        $result = $sendOTP->where($arr);
        if ($result[0]->otp == $otp) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User;
                $result2 = $user->first($arr);
                $id = $result2->id;
                $temp['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                show($temp);
                // $user->validate($data);
                $user->update($id, $temp, 'id');
                $sendOTP->delete($result[0]->id);
                redirect('login');
            }
            $this->view('password/changePW');
        }
        
    }
}
