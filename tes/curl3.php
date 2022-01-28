<?php
$data = '{
  "intent":"sale",
  "redirect_urls":{
    "return_url":"http://localhost/yoinstructor2/tes/curl3.php?kode=123456",
    "cancel_url":"http://localhost/yoinstructor2/tes/curl3.php?kode=cancel"
  },
  "payer":{
    "payment_method":"paypal"
  },
  "transactions":[
    {
      "amount":{
        "total":"7.47",
        "currency":"USD"
      },
      "description":"This is the payment transaction description."
    }
  ]
}';

$ch = curl_init();

$clientId = "AYXbxKX2zyMA_E6S9IiM7H5JmNbSL_lXkqE4HbvrR_usiUDqmfkKxY25bq03z5hGN_n5Bz0Vm2IOTagB";
$secret = "EDDhEejZD5j6h8LfjXYf9xFF1ingBpKZ2oHp2j4dpePpnJIFIRcSC6LBQthQrBaixiwhVt6e0q5_B-My";

curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/payments/payment");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_USERPWD, $clientId.":".$secret);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Authorization: Bearer EOjEJigcsRhdOgD7_76lPfrr45UfuI43zzNzTktUk1MK", 
  "Content-length: ".strlen($data))
);

$result = curl_exec($ch);

if(empty($result))die("Error: No response.");
else
{
    $json = json_decode($result);
    print_r($json->access_token);
}

curl_close($ch);
?>