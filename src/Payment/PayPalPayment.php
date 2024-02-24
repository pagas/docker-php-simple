<?php

namespace Payment;

use Payment\IPayment;

// Define Paypal class
class PayPalPayment implements IPayment
{

    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    public function pay(int $amount): bool
    {
        echo "PayPal payment " . $amount . " processing from:" . $this->getEmail() . "<br />";

        return true;
    }
}
