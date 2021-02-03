<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

interface OperationId
{
    public function __toString(): string;
}
