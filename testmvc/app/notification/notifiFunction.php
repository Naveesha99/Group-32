<?php

class Message {
    public function acceptNotification($target_userID, $reqID, $status) {
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

    public function rejectNotification($target_userID, $reqID, $status, $reason) {
        $message = "Your request id " . $reqID . " has been " . $status . " because " . $reason;
        $arr = [
            'target_userID' => $target_userID,
            'message' => $message,
            // 'isRead' => 0
        ];
        // show($arr);
        $notification = new Notification;
        $notification->insert($arr);
    }

    public function employeeNotification($target_userID, $task, $time1, $time2, $location) {
        $message = "You have been assigned for " . $task . " from " . $time1 . " to " . $time2 . " at " . $location;
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