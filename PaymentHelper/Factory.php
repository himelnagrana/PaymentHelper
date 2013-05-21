<?php

namespace Helper\Payment;

class Factory
{
    public static function get($method, $container, $amount)
    {
        switch ($method) {

            case 'card':
                return new AuthorizeDotNet($container, $amount);

            case 'paypal':
                return new Paypal($container, $amount);

        }
    }
}