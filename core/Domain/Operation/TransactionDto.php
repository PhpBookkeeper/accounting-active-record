<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use Money\Money;

final class TransactionDto
{
    public TransactionId $id;
    public EntryDto $debitEntryDto;
    public EntryDto $creditEntryDto;
    public Money $amount;
}
