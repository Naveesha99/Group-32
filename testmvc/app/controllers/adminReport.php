<?php

class adminReport
{
    use Controller;

    public function index()
    {
        $order = new Orders;
		$result['order'] = $order->findAll();
		// show($result['order']);
		$data['order'] = $result['order'];

        $resReq = new Reservationrequests;
        $arr1['status'] = 'accepted';
        $result['accepted'] = $resReq->where($arr1);
        $paid = new Reservationpayments;
        $arr2['isPaid'] = 1;
        $result['paid'] = $paid->where($arr2);

        foreach ($result['paid'] as $row) {
            foreach ($result['accepted'] as $row2) {
                if ($row->reqid == $row2->id) {
                    $result['income'][] = $row2;
                }
            }
        }
        $data['income'] = $result['income'];

        $this->view('admin/adminReport', $data);
    }
}