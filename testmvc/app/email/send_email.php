<?php

class SendMail
{

    public function sendEmployeeEmail($email, $name, $type = "otp")
    {

        // $words = explode(' ', $name);

        // if (!empty($words)) {
        //     $firstWord = $words[0];
        // } else {
        //     $firstWord = $name;
        // }

        try {

            // Replace with your SMTP server & port
            ini_set("SMTP", "smtp.gmail.com");
            ini_set("smtp_port", "587");

            if ($type == "otp") {
                // Email content
                $subject = "Notify Your Employee Account Creation";
                $message =
                '<div style="background-color: #e7e7e7; padding: 40px 15px 50px 15px; margin: 5px; border-top-left-radius: 30px; border-bottom-right-radius: 30px;">'
                . '<p style="text-align: start; font-size: 19px; padding: 0; margin:0 0 0 15px;" >Dear ' . $name . ',</p> <br>'
                . '<p style="color:white; text-align: center; font-size: 42px; padding: 20px 0 0 10px; margin: 0px;">Welcome To</p>'
                . '<p style="font-size: 18px; text-align: center;padding: 0px 20px;">Your employee account created Successfully.<br>'
                . ' Login with your email and NIC number as your password<br>'
                . '<p style="font-size: 21px; text-align: center;"> <b>'
                . 'Please login to your account and change your Password.<br>'
                . '<a href="#">Click Here</a> to login<br>';

            }
            // else{
            //     $subject = "Your AMORAL Employee Account - Password";
            //     $message =
            //         'this is also test message';
            // }

            // Email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: lakshannaveesha10@gmail.com" . "\r\n";

            // Send email
            if (mail($email, $subject, $message, $headers)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {

            return false;
        }
    }

    public function employeeRequest($email, $name, $type = "request")
    {

        // $words = explode(' ', $name);

        // if (!empty($words)) {
        //     $firstWord = $words[0];
        // } else {
        //     $firstWord = $name;
        // }

        try {

            // Replace with your SMTP server & port
            ini_set("SMTP", "smtp.gmail.com");
            ini_set("smtp_port", "587");

            if ($type == "request") {
                // Email content
                $subject = "Leave Request Form Sent";
                $message =
                '<div style="background-color: #e7e7e7; padding: 40px 15px 50px 15px; margin: 5px; border-top-left-radius: 30px; border-bottom-right-radius: 30px;">'
                . '<p style="text-align: start; font-size: 19px; padding: 0; margin:0 0 0 15px;" >Dear ' . $name . ',</p> <br>'
                . '<p style="color:white; text-align: center; font-size: 42px; padding: 20px 0 0 10px; margin: 0px;">Leave Request Form</p>'
                . '<p style="font-size: 18px; text-align: center;padding: 0px 20px;">Your leave request is sent  Successfully.<br>'
                . ' It is sent for approval<br>'
                . '<p style="font-size: 21px; text-align: center;"> <b>'
                . 'You will inform by an email about the status of the request.<br>'
                . '<a href="#">Click Here</a> to see the request<br>';

            }
            // else{
            //     $subject = "Your AMORAL Employee Account - Password";
            //     $message =
            //         'this is also test message';
            // }

            // Email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: nethuhasi2001@gmail.com" . "\r\n";

            // Send email
            if (mail($email, $subject, $message, $headers)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {

            return false;
        }
    }


}