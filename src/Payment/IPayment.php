<?php
namespace Payment;

// Define the Strategy class
interface IPayment
{
    /* Declare the main payments algorithms */
    public function pay(int $amount): bool;
}
