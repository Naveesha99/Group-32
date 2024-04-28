<?php


class viewRequest
{
    use Controller;

    public function index()
    {

        $data = [];

        $requestID = isset($_GET['id']) ? $_GET['id'] : null;
        $request = new Reservationrequests;
        $user = new User;

        if ($requestID) {
            $arr['id'] = $requestID;

            $requestData = $request->where($arr);

            if ($requestData) {
                $data['request'] = $requestData;
            } else {
                echo "request not found";
                exit();
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $status = $_POST['status'];
            $reason = $_POST['reason'];

            if ($status == 'accepted') {
                $arr['status'] = 'accepted';
                date_default_timezone_set('Asia/Colombo');
                $dateTime = new DateTime();
                $arr['acceptedTime'] = $dateTime->format('Y-m-d H:i:s');
                $arr2['id'] = $requestData[0]->reservationistId;
                $result = $user->where($arr2);
                $email = $result['email'];
                $request->update($requestID, $arr);
                $message = new Message;
                $message->acceptNotification($requestData[0]->reservationistId, $requestID, $status);
                redirect('adminrequest');
            } else {
                $arr['status'] = 'rejected';
                $arr['reason'] = $reason;
                date_default_timezone_set('Asia/Colombo');
                $dateTime = new DateTime();
                $arr['acceptedTime'] = $dateTime->format('Y-m-d H:i:s');
                $request->update($requestID, $arr);
                $message = new Message;
                $message->rejectNotification($requestData[0]->reservationistId, $requestID, $status, $reason);
                redirect('adminrequest');
            }
        }
        $this->view('admin/viewrequest', $data);
    }
}
