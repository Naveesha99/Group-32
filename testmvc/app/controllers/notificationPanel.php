<?php

class notificationPanel
{
    use Controller;

    public function index()
    {
        $notification = new Notification();
        $arr['target_userID'] = $_SESSION['USER']->id;
        $result = $notification->where($arr);
        $data['notifications'] = $result;
        // show($result);
        
        // if($result){
        //     foreach($result as $row){
        //         $message[] = $row;
        //     }
        //     show($message);
        // }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $sendData['isRead'] = 1;
            if($notification->update($id, $sendData)){
                redirect('notificationPanel');
            }
        }


        $this->view('notificationPanel', $data);

    }
}