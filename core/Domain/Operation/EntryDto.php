<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use YiiSoft\Billing\Domain\Account\AccountId;

final class EntryDto
{
    public EntryId $id;
    public AccountId $accountId;
}
