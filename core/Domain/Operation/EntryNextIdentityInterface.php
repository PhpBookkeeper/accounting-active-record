<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

interface EntryNextIdentityInterface
{
    public function nextEntryIdentity(): string;
}
