<?php


class viewRequest
{
    use Controller;

    public function index()
    {

        $data = [];

        $requestID = isset($_GET['id']) ? $_GET['id'] : null;
        $request = new Reservationrequests;

        if($requestID){
            $arr['id'] = $requestID;

            $requestData = $request->where($arr);

            if($requestData){
                $data['request'] = $requestData;

            }else {
                echo "request not found";
                exit();
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['accept_request'])) {
                $id = $data['request'][0]->id;
                $arr1['status'] = 'accepted';
                $request->update($id, $arr1);
                redirect('request');
            }

            if (isset($_POST['reject_request'])) {
                $id = $data['request'][0]->id;
                $arr1['status'] = 'rejected';
                $request->update($id, $arr1);
                redirect('request');
            }
            
        }
    //  show($data['request']);

        $this->view('admin/viewrequest', $data);
    }
}