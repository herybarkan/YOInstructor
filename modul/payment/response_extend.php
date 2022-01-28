<?php
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'config_extend.php';

if (empty($_GET['paymentId']) || empty($_GET['PayerID'])) {
    throw new Exception('The response is missing the paymentId and PayerID');
}



$paymentId = $_GET['paymentId'];
$payment = Payment::get($paymentId, $apiContext);

$execution = new PaymentExecution();
$execution->setPayerId($_GET['PayerID']);

try {
    // Take the payment
    $payment->execute($execution, $apiContext);

    try {
        $db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

        $payment = Payment::get($paymentId, $apiContext);

        $data = [
            'product_id' => $payment->transactions[0]->item_list->items[0]->sku,
            'transaction_id' => $payment->getId(),
            'description' => $payment->transactions[0]->description,
            'member' => $payment->transactions[0]->member,
            'payment_amount' => $payment->transactions[0]->amount->total,
            'currency_code' => $payment->transactions[0]->amount->currency,
            'payment_status' => $payment->getState(),
            'invoice_id' => $payment->transactions[0]->invoice_number,
            'product_name' => $payment->transactions[0]->item_list->items[0]->name,
            'date_order' => $payment->transactions[0]->date_order,
            
            // 'date_order' => $payment->transactions[0]->date_order,
			
        ];
        //echo $data;
        if (addPayment($data) !== false && $data['payment_status'] === 'approved') {
            // Payment successfully added, redirect to the payment complete page.
			$inserids =$db->insert_id;
            header("location:http://localhost/yoinstructor3/?com=konf_payment_extend&payid=$inserids");
            exit(1);
        } else {
            // Payment failed
			header("location:http://localhost/yoinstructor3/modul/payment/PaypalFailed.php");
             exit(1);
        }

    } catch (Exception $e) {
        // Failed to retrieve payment from PayPal

    }

} catch (Exception $e) {
    // Failed to take payment

}

/**
 * Add payment to database
 *
 * @param array $data Payment data
 * @return int|bool ID of new payment or false if failed
 */
function addPayment($data)
{
    global $db;

    //if (is_array($data)) {
		//'isdsssss' --- i - integer, d - double, s - string, b - BLOB
        $product_id=$data['product_id'];
        $trx_id=$data['transaction_id'];
        $kdis=$data['description'];
        $kmem=$data['member'];
        

        $paymenamount=$data['payment_amount'];
        $currencycode=$data['currency_code'];
        $paysts=$data['payment_status'];
        $invid=$data['invoice_id'];
        $proname=$data['product_name'];
        $kdateo=$data['description'];
        $tglt=date('Y-m-d H:i:s');
         // $stmt = $db->prepare('INSERT INTO `payments` (product_id,transaction_id, kd_instructor, kd_member, payment_amount,currency_code, payment_status, invoice_id, product_name, date_order, createdtime) VALUES(?,  ?,"'.$kdis.'","'.$kmem.'", ?,?, ?, ?, ?, ,"'.$kdateo.'",?)');
        $stmt = $db->prepare('INSERT INTO `payments_upgrade` (product_id,transaction_id, kd_instructor, kd_member, payment_amount,currency_code, payment_status, invoice_id, product_name, date_order, createdtime) VALUES(
            "'.$product_id.'",  
            "'.$trx_id.'",
            "'.$kdis.'",
            "'.$kmem.'", 
            "'.$paymenamount.'", 
            "'.$currencycode.'", 
            "'.$paysts.'", 
            "'.$invid.'", 
            "'.$proname.'", 
            "'.$kdateo.'",
            "'.$tglt.'"
        )');
        //$stmt->bind_param(
         //   'isdsssss',
            //$data['product_id'],
            //$data['transaction_id'],
            //"asasas",
			//$data['description'],
			//$data['xkd_member'],
            //$data['payment_amount'],
            //$data['currency_code'],
            //$data['payment_status'],
            //$data['invoice_id'],
            //$data['product_name']
			//$data['xtgl'],
            //date('Y-m-d H:i:s')
        //);
        $stmt->execute();
        $stmt->close();
		
		//return $db->insert_id;
		
		//===================================================================================
		// $stmt2 = $db2->prepare("INSERT INTO `payments` (product_id) VALUES(121212)");
       
  //       $stmt2->execute();
  //       $stmt2->close();
		//====================================================================================
		
        //return $db2->insert_id;
   // }

    //return false;
}
