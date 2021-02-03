<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use DateTimeImmutable;
use Money\Money;

final class Transaction
{
    private TransactionId $id;
    private Entry $debit;
    private Entry $credit;
    private Money $amount;
    private DateTimeImmutable $dateTime;

    public function __construct(
        TransactionId $id,
        EntryDto $debitEntryDto,
        EntryDto $creditEntryDto,
        Money $amount,
        DateTimeImmutable $dateTime
    ) {
        $this->id = $id;

        $this->debit = new Entry(
            $debitEntryDto->id,
            $debitEntryDto->accountId,
            $amount,
            $dateTime,
            EntryType::debit(),
        );

        $this->credit = new Entry(
            $creditEntryDto->id,
            $creditEntryDto->accountId,
            $amount,
            $dateTime,
            EntryType::credit(),
        );

        $this->amount = $amount;
        $this->dateTime = $dateTime;
    }

    public function getId(): TransactionId
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
