<?php


class viewLeaveRequest
{
    use Controller;

    public function index()
    {

        $data = [];

        $requestID = isset($_GET['id']) ? $_GET['id'] : null;
        $request = new EmpRequest;

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
            if (isset($_POST['accept_request'])) {
                $id = $data['request'][0]->id;
                $state = $data['request'][0]->state;
                if ($state === 'pending') {
                    $arr1['state'] = 'accepted';
                    $request->update($id, $arr1);
                    redirect('leaveRequest');
                }
            }

            if (isset($_POST['reject_request'])) {
                $id = $data['request'][0]->id;
                $state = $data['request'][0]->state;
                if ($state === 'pending' || $state === 'accepted') {
                    $arr1['state'] = 'rejected';
                    $request->update($id, $arr1);
                    redirect('leaveRequest');
                }
            }
        }
        //  show($data['request']);

        $this->view('admin/viewLeaveRequest', $data);
    }
}
