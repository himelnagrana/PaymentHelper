<?php

include 'PaymentHelper/Factory.php';

$paymentData['method']      = 'card';
$paymentData['company_id']  = 'c190956';
$paymentData['user_id']     = 'u890956';
$paymentData['amount']      = '130.99';
$paymentData['currency']    = 'USD';
$paymentData['notes']       = 'payment for XX service';


$this->paymentHelperFactory = new Helper\Payment\Factory();
$gateway  = $this->paymentHelperFactory->get($paymentData['method'], $this->container, $paymentData['amount']);
$response = $gateway->doPayment($paymentData);