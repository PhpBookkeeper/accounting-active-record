<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

interface TransactionId
{
    public function __toString(): string;
}
