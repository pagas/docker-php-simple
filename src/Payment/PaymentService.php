<?php

namespace Payment;

use Payment\IPayment;

// Define our context Payment Service
class PaymentService
{

    private IPayment $paymentProcessor;

    public function makePayment(int $amount): bool
    {
        return $this->paymentProcessor->pay($amount);
    }

    public function setPaymentProcessor(IPayment $paymentProcessor): void
    {
        $this->paymentProcessor = $paymentProcessor;
    }
}
