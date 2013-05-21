<?php

namespace Helper\Payment;

interface Base
{
    public function __construct($container, $amount);

    public function doPayment($data);
    public function saveTransactionHistory($data);
}