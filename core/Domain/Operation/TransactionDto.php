<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use Money\Money;

final class TransactionDto
{
    public string $debitAccountId;
    public string $creditAccountId;
    public Money $amount;
}
