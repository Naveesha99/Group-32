<?php

class dramaIncome
{

    use Controller;

    public function index()
    {
        $order = new Orders;
        $result['order'] = $order->findAll();
        $limit = 10;
        $data['pages'] = ceil(count($result['order']) / $limit);

        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            
            $start = $page * $limit;
        } else {
            $page = 1;
        }
        

        $data['order'] = array_slice($result['order'], $start, $limit);



        $this->view('admin/dramaIncome', $data);
    }
}