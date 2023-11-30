<?php
declare(strict_types=1);

use App\Account;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
  /** @test */
    public function an_account_number_can_be_set() :void
    {
        //Setup
        $account = new Account();

        //Do Something
        $account->setAccountNumber(12345);

        //Make Assertions
        $this->assertSame(12345, $account->getAccountNumber());
    }

    /** @test */
    public function an_account_can_be_related_to_user(): void
    {
        //Setup
        $account = new Account();
        $accountHolder = new \App\AccountHolder();

        //Do Something
        $account->setAccountHolder($accountHolder);

        //Make Assertions
        $this->assertSame($accountHolder, $account->getAccountHolder()) ;
    }
}

