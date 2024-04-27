<?php

class SendMail
{

    public function sendEmployeeEmail($email, $name, $type = "employee")
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

            if ($type == "employee") {
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


    public function sendOTP($email, $name, $otp, $type = "otp")
    {
        try {

            // Replace with your SMTP server & port
            ini_set("SMTP", "smtp.gmail.com");
            ini_set("smtp_port", "587");


            if ($type == "otp") {
                // Email content
                $subject = "OTP for Account Creation";
                $message =
                    '<div style="background-color: #e7e7e7; padding: 40px 15px 50px 15px; margin: 5px; border-top-left-radius: 30px; border-bottom-right-radius: 30px;">'
                    . '<p style="text-align: start; font-size: 19px; padding: 0; margin:0 0 0 15px;" >Dear ' . $name . ',</p> <br>'
                    . '<p style="color:white; text-align: center; font-size: 42px; padding: 20px 0 0 10px; margin: 0px;">Welcome To</p>'
                    . '<p style="font-size: 18px; text-align: center;padding: 0px 20px;">Your OTP for Forgot Password <b>' . $otp . '</b><br>'
                    . ' Please use this OTP change your password.<br>'
                    . '<p style="font-size: 21px; text-align: center;"> <b>';
            }


            // Email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= "From: lakshannaveesha10@gmail.com" . "\r\n";


            if (mail($email, $subject, $message, $headers)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function sendTicketEmail($email, $name, $jpgFile, $ticket_id, $type = "ticket")
    {
        try {
            // Replace with your SMTP server & port
            ini_set("SMTP", "smtp.gmail.com");
            ini_set("smtp_port", "587");

            if ($type == "ticket") {
                // Email content
                $subject = "Ticket Created Successfully";
                $message =
                    '<div style="background-color: #e7e7e7; padding: 40px 15px 50px 15px; margin: 5px; border-top-left-radius: 30px; border-bottom-right-radius: 30px;">'
                    . '<p style="text-align: start; font-size: 19px; padding: 0; margin:0 0 0 15px;" >Dear ' . $name . ',</p> <br>'
                    . '<p style="color:white; text-align: center; font-size: 42px; padding: 20px 0 0 10px; margin: 0px;">Welcome To</p>'
                    . '<p style="font-size: 18px; text-align: center;padding: 0px 20px;">Your Ticket Created Successfully.<br>'
                    . ' Your Ticket ID is <b>' . $ticket_id . '</b><br>'
                    . '<p style="font-size: 21px; text-align: center;"> <b>'
                    . 'Please use this Ticket ID to track your ticket.<br>'
                    . '<a href="#">Click Here</a> to track your ticket<br>'
                    . '<img src="' . $jpgFile . '" alt="Ticket Image" style="display: block; margin: 20px auto; max-width: 100%;">'
                    . '</div>';

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
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function sendResetEmail($email, $url, $type = "reset")
    {
        try {
            // Replace with your SMTP server & port
            ini_set("SMTP", "smtp.gmail.com");
            ini_set("smtp_port", "587");

            if ($type == "reset") {
                // Email content
                $subject = "Reset Your Password";
                $message =
                '<div style="background-color: #e7e7e7; padding: 40px 15px 50px 15px; margin: 5px; border-top-left-radius: 30px; border-bottom-right-radius: 30px;">'
                . '<p style="text-align: start; font-size: 19px; padding: 0; margin:0 0 0 15px;" >Dear User,</p> <br>'
                . '<p style="color:white; text-align: center; font-size: 42px; padding: 20px 0 0 10px; margin: 0px;">Welcome To</p>'
                . '<p style="font-size: 18px; text-align: center;padding: 0px 20px;">Please click the link below to reset your password.<br>'
                . '<a href="' . $url . '">Click Here</a> to reset your password<br>'
                . '<p style="font-size: 21px; text-align: center;"> <b>'
                . 'If you did not request a password reset, please ignore this email.<br>'
                . '</div>';

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
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}

