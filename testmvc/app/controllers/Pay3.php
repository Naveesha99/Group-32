<?php

/**
 * home class
 */
class Pay3
{
    use Controller;

    public function index()
    {

        if(isset($_GET['id']))
        {

            $id = $_GET['id'];
            // show($id);

            $resrvaReq = new Reservationrequests;
            $arr['id'] =  $id;
            $data = $resrvaReq->where($arr);

                $amount = $data[0]->amount;
                $name = $data[0]->name;
                // $email = $data[0]->email;
                // $phone = $data[0]->phone;

                $merchant_id = "1225768";
                // $order_id = uniqid();
                // $merchant_secret = "NzYwOTE2NzQ1MjcyNzYyNTAxMTQ4ODkzMzQ1OTMzMDg0Njg5NDg=";
                $merchant_secret="NzYwOTE2NzQ1MjcyNzYyNTAxMTQ4ODkzMzQ1OTMzMDg0Njg5NDg=";
                $currency = "LKR";

                $hash = strtoupper(
                    md5(
                        $merchant_id . 
                        $id . 
                        number_format($amount, 2, '.', '') . 
                        $currency .  
                        strtoupper(md5($merchant_secret)) 
                    ) 
                );

                $array = [];
                $array["item"]="A01";
                $array["first_name"]=$name;
                $array["last_name"]="last_name";
                // $array["email"]=$email;
                // $array["phone"]=$phone;
                $array["address"]="address";
                $array["city"]="city";

                $array["amount"] = $amount;
                $array["merchant_id"] = $merchant_id;
                $array["order_id"] = $id;
                $array["amount"] = $amount;
                $array["currency"] = $currency;
                $array["hash"] = $hash;

                $jsonObj = json_encode($array);

                echo $jsonObj;
        }

        // payment success 
        if (isset($_GET['pay_id'])) {
            echo json_encode($_GET['pay_id']);

            $pay_id = $_GET['pay_id'];

            $reqid=$pay_id;
            $id = $pay_id;


            $reservationReq=new Reservationrequests;
            $resrvaReq = new Reservationpayments;
            $result1=$reservationReq->where(['id' => $reqid]);
            $arr=[
                // 'reqid'=>$reqid,
                'isPaid'=>1
            ];
            $reservationReq->update($id, $arr);

            // $result = $resrvaReq->where(['reqid' => $reqid]);
            //  $detailsofReq['ispaid'] = 1;
            // foreach($result as $res)
            // {
            //     $id = $res->id;
            //     // show($id);
            //     $resrvaReq->update($id, $detailsofReq);
            // }
        }
    }
}