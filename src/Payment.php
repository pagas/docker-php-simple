<?php

use Payment\PaymentService;
use Payment\PayPalPayment;
use Payment\WalletPayment;


class Payment
{
    public function run()
    {
        // Client can easily pick/interchange the Payment method at the run time
        $payment = new PaymentService();

        $payment->setPaymentProcessor(new WalletPayment("1C1zS5eP8QFzfi2DMPTfTL5SLmv7DivdNb"));
        $amount = 100;
        $payment->makePayment($amount);
        // Process using Paypal

        $payment->setPaymentProcessor(new PayPalPayment("test@email.com"));
        $amount = 199;
        $payment->makePayment($amount);
    }
}
