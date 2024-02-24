<?php

namespace Payment;

use Payment\IPayment;

// Define Wallet class
class WalletPayment implements IPayment
{

    private string $walletAddress;

    public function __construct(string $walletAddress)
    {
        $this->walletAddress = $walletAddress;
    }

    /**
     * Get the value of walletAddress
     */
    public function getWalletAddress(): string
    {
        return $this->walletAddress;
    }

    public function pay(int $amount): bool
    {
        echo "Wallet payment " . $amount . " processing from: " . $this->getWalletAddress() . "<br/>";
        return true;
    }
}
