<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use DateTimeImmutable;
use Money\Money;

final class Transaction
{
    private string $id;
    private Entry $debit;
    private Entry $credit;
    private Money $amount;
    private DateTimeImmutable $dateTime;

    public function __construct(
        string $id,
        string $debitAccountId,
        string $creditAccountId,
        Money $amount,
        DateTimeImmutable $dateTime,
        EntryNextIdentityInterface $entryNextIdentity
    ) {
        $this->id = $id;

        $this->debit = new Entry(
            $entryNextIdentity->nextEntryIdentity(),
            $debitAccountId,
            $amount,
            $dateTime,
            EntryType::debit(),
        );

        $this->credit = new Entry(
            $entryNextIdentity->nextEntryIdentity(),
            $creditAccountId,
            $amount,
            $dateTime,
            EntryType::credit(),
        );

        $this->amount = $amount;
        $this->dateTime = $dateTime;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDebit(): Entry
    {
        return $this->debit;
    }

    public function getCredit(): Entry
    {
        return $this->credit;
    }

    public function getAmount(): Money
    {
        return $this->amount;
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }
}
