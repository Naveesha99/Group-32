<?php


class adminRequest
{
    use Controller;

    public function index()
    {
        $request = new Reservationrequests;
        $result = $this->status($request);
        $accepted = 0;
        $rejected = 0;
        $pending = 0;

        foreach($result as $item){
            $status = $item->status;
            switch ($status) {
                case 'accepted':
                    $accepted++;
                    break;
                case 'rejected':
                    $rejected++;
                    break;
                case 'pending':
                    $pending++;
                    break;
            }
        }

        $data['accepted'] = $accepted;
        $data['rejected'] = $rejected;
        $data['pending'] = $pending;
        // show($data);
        $this->view('admin/adminrequest', $data);
    }
    private function status($request){
            $result = $request->findAll();
            foreach($result as $key){
                unset($key->id);
                unset($key->hallno);
                unset($key->name);
                unset($key->date);
                unset($key->startTime);
                unset($key->endTime);
                unset($key->hours);
                unset($key->headCount);
                unset($key->sounds);
                unset($key->standings);
                unset($key->message);
                unset($key->amount);
                unset($key->reservationistId);
            }
            // show($result);
            return $result;
    }
}