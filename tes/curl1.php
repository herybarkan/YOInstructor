<?php
$url='https://api-m.sandbox.paypal.com/v2/checkout/orders';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 360);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json',
  //'Content-Length: ' . strlen($data_string)),
  'Authorization: Bearer Access-Token',
  '{
  "intent": "CAPTURE",
  "purchase_units": 
  	[
    	{
      		"amount": 
				{
        			"currency_code": "USD",
        			"value": "100.00"
      			}
    	}
  	]
	}'
);
echo $res=curl_exec($ch);
curl_close($ch);
?>