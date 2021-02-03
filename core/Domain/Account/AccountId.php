<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Account;

interface AccountId
{
    public function __toString(): string;
}
