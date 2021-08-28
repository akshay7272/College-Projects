<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array("X-Api-Key:81bc30628f5d5d3066912e55b1610169",
                  "X-Auth-Token:a540db859c87d893958a822e99512ed3"));
$payload = Array(
    'purpose' => 'Online shopping',
    "amount" =>  '400',
    'phone' => '9816428244',
    'buyer_name' => 'name',
    'redirect_url' => 'http://www.example.com/redirect/',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'abhay82195@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response = json_decode($response);
$_SESSION['TID']=$response->payment_request->id;
header('location:'.$response->payment_request->longurl);
?>