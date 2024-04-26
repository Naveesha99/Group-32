<?php

class Message {
    public function resNotification($target_userID, $reqID, $status) {
        $message = "Your request id " . $reqID . " has been " . $status;
        $arr = [
            'target_userID' => $target_userID,
            'message' => $message,
            // 'isRead' => 0
        ];
        // show($arr);
        $notification = new Notification;
        $notification->insert($arr);
    }
}