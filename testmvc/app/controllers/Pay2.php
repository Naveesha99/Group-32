<?php

/**
 * home class
 */
class Pay2
{
    use Controller;

    public function index()
    {

        $timeslot1 = new Timeslot1;

       $arr['id'] = $_GET["id"];
       $data = $timeslot1->where($arr);

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
      $array["address"]="120, colombo, sri lanka";
      $array["city"]="colombo";

      $array["amount"] = $amount;
      $array["merchant_id"] = $merchant_id;
      $array["order_id"] = $order_id;
      $array["amount"] = $amount;
      $array["currency"] = $currency;
      $array["hash"] = $hash;

      $jsonObj = json_encode($array);

      echo $jsonObj;

       

       

    //     $merchant_id = "1225768";
    //     $order_id = uniqid();
    //     $merchant_secret = "NzYwOTE2NzQ1MjcyNzYyNTAxMTQ4ODkzMzQ1OTMzMDg0Njg5NDg=";
    //     $currency = "LKR";
        
    //     $hash = strtoupper(
    //         md5(
    //             $merchant_id . 
    //             $order_id . 
    //             number_format($amount, 2, '.', '') . 
    //             $currency .  
    //             strtoupper(md5($merchant_secret)) 
    //         ) 
    //     );
         
        
    //     $j = '{"name":"'. $name. '","email":"'.$email. '","amount":"'.$amount. '","phone":"'.$phone. '","hash":"'. $hash. '","currency":"'. $currency. '"}';

    //    echo $j;
    }
}

