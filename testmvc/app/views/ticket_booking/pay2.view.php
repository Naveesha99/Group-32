<?php

$amount = 8000;
$merchant_id = "1225768";
$order_id = uniqid();
$merchant_secret = "MTAxMDUzMDI0MzQzNjAyODIzNzM4OTkxMjU1MDIwNDM3MTg1MzA=";
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
$array["item"]="ABCD";
$array["first_name"]="kasun";
$array["last_name"]="perera";
$array["email"]="kasun@gmail.com";
$array["phone"]="0777454545";
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
