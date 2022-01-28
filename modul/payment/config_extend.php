<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require './autoload.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'AYXbxKX2zyMA_E6S9IiM7H5JmNbSL_lXkqE4HbvrR_usiUDqmfkKxY25bq03z5hGN_n5Bz0Vm2IOTagB',
    'client_secret' => 'EDDhEejZD5j6h8LfjXYf9xFF1ingBpKZ2oHp2j4dpePpnJIFIRcSC6LBQthQrBaixiwhVt6e0q5_B-My',
    'return_url' => 'http://localhost/yoinstructor3/modul/payment/response_extend.php',
    'cancel_url' => 'http://localhost/yoinstructor3/modul/payment/payment-cancelled.html'
];

// Database settings. Change these for your database configuration.
$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'yoi_db'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}
