<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

interface TransactionNextIdentityInterface
{
    public function nextTransactionIdentity(): string;
}
