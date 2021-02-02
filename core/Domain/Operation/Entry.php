<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use DateTimeImmutable;
use Money\Money;

final class Entry
{
    private string $id;
    private string $accountId;
    private DateTimeImmutable $dateTime;
    private Money $amount;
    private EntryType $type;

    public function __construct(
        string $id,
        string $accountId,
        Money $amount,
        DateTimeImmutable $dateTime,
        EntryType $type
    ) {
        $this->id = $id;
        $this->accountId = $accountId;
        $this->amount = $amount;
        $this->dateTime = $dateTime;
        $this->type = $type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getAmount(): Money
    {
        return $this->amount;
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }

    public function getType(): EntryType
    {
        return $this->type;
    }
}
