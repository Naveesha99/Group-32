<?php

/**
 * home class
 */
class Pay2
{
    use Controller;

    public function index()
    {

//____________________________________________________________________________________

        if(isset($_GET['id']) && isset($_GET['table']))
        {

            $id = $_GET['id'];
            $table = $_GET['table'];
            // $releaseArray = json_decode($_GET['releaseData'], true);

            // $table = $_GET['table'];

            // Decode the JSON string into a PHP array
            // $releaseArray = json_decode($table, true);



            if($table=='table1')
            {
                $timeslot1 = new Timeslot1;
                $arr['id'] =  $id;
                $data = $timeslot1->where($arr);
            }
            else if($table=='table2')
            {
                $timeslot2 = new Timeslot2;
                $arr['id'] = $id;
                $data = $timeslot2->where($arr);
            }
            // else if($table=='table3')
            else
            {
                $timeslot3= new Timeslot3;
                $arr['id'] = $id;
                $data = $timeslot3->where($arr);
            }
        


                $amount = $data[0]->price;
                $name = $data[0]->username;
                $email = $data[0]->email;
                $phone = $data[0]->phone;

                $merchant_id = "1225768";
                $order_id = uniqid();
                $merchant_secret = "NzYwOTE2NzQ1MjcyNzYyNTAxMTQ4ODkzMzQ1OTMzMDg0Njg5NDg=";
                $currency = "LKR";

                $hash = strtoupper(
                    md5(
                        $merchant_id . 
                        $order_id . 
                        number_format($amount, 2, '.', '') . 
                        $currency .  
                        strtoupper(md5($merchant_secret)) 
                    ) 
                );

                $array = [];
                $array["item"]="A01";
                $array["first_name"]=$name;
                $array["last_name"]="last_name";
                $array["email"]=$email;
                $array["phone"]=$phone;
                $array["address"]="address";
                $array["city"]="city";

                $array["amount"] = $amount;
                $array["merchant_id"] = $merchant_id;
                $array["order_id"] = $order_id;
                $array["amount"] = $amount;
                $array["currency"] = $currency;
                $array["hash"] = $hash;

                $jsonObj = json_encode($array);

                echo $jsonObj;
        }
        
    }
}

