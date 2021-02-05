<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

interface OperationRepositoryInterface
{
    public function getById(): ?Operation;

    public function save(Operation $operation): void;
}
