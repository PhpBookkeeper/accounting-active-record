<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use Money\Money;
use YiiSoft\Billing\Domain\Account\AccountId;

final class TransactionDto
{
    public TransactionId $id;
    public AccountId $debitAccountId;
    public AccountId $creditAccountId;
    public Money $amount;
}
