<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

interface OperationRepositoryInterface
{
    public function getById(OperationId $id): ?Operation;

    public function save(Operation $operation): void;
}
