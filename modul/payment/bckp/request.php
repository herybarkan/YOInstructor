<?php
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\ItemList;

require 'config.php';

if (empty($_POST['item_number'])) {
    throw new Exception('This script should not be called directly, expected post data');
}

$payer = new Payer();
$payer->setPaymentMethod('paypal');

// Set some example data for the payment.
$currency = $_POST['hf_curr'];
$item_qty = 1;
$amountPayable = $_POST['hf_prc'];
$product_name = $_POST['hf_pkg'];
$item_code = $_POST['hf_pid'];
$description = 'Paypal transaction';
$invoiceNumber = uniqid();
$kd_inst = $_POST['hf_kd_inst'];
$kd_member = $_POST['hf_member'];
$tgl_order = $_POST['hf_tgl'];
$my_items = array(
				array(
						'name'=> $product_name, 
						'quantity'=> $item_qty, 
						'price'=> $amountPayable, 
						'sku'=> $item_code, 
						'currency'=> $currency,
						'kd_inst'=> $kd_inst, 
						'kd_member'=> $kd_member, 
						'tgl_order'=> $tgl_order,
					)
				);
	
$amount = new Amount();
$amount->setCurrency($currency)
    ->setTotal($amountPayable);

$items = new ItemList();
$items->setItems($my_items);
	
$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setDescription($description)
    ->setInvoiceNumber($invoiceNumber)
	->setItemList($items);

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl($paypalConfig['return_url'])
    ->setCancelUrl($paypalConfig['cancel_url']);

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions([$transaction])
    ->setRedirectUrls($redirectUrls);

try {
    $payment->create($apiContext);
} catch (Exception $e) {
    throw new Exception($e);
	echo $e->getCode(); // Prints the Error Code
    echo $e->getData(); // Prints the detailed error message 
    die($e);
}

header('location:' . $payment->getApprovalLink());
exit(1);