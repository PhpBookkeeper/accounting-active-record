<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

interface EntryId
{
    public function __toString(): string;
}
