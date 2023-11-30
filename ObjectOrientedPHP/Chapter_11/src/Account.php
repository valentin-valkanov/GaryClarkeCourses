<?php declare(strict_types=1);

namespace App;


class Account
{
    private int $accountNumber;
    private AccountHolder $accountHolder;

    public function setAccountNumber($accountNumber):void
    {
        $this->accountNumber = $accountNumber;
    }
    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function setAccountHolder($accountHolder): void
    {
        $this->accountHolder = $accountHolder;
    }
    public function getAccountHolder(): AccountHolder
    {
        return $this->accountHolder;
    }
}

