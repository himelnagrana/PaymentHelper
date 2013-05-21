<?php

namespace Helper\Payment;

class AuthorizeDotNet implements Base
{
    /**
     * @var Array
     */
    protected $config;

    protected $response;

    protected $amount;

    public function __construct($container, $amount)
    {
        $this->config = $container['conf'];
        $this->amount = $amount;
    }

    public function doPayment($data)
    {
        $this->saveTransactionHistory($data);

        $this->response = new \stdClass();
        $this->response->status = '200';
        $this->response->message = 'Payment is successful';
        $this->response->transaction_id = 'PP-PAYMENT-'.md5($data['company_id']. '-' .$data['user_id']. '-' .time());

        return $this->response;
    }

    public function saveTransactionHistory($data)
    {
        // save the transaction data
    }
}