<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use DateTimeImmutable;

final class Operation
{
    private OperationId $id;
    private DateTimeImmutable $dateTime;

    /**
     * @var Transaction[]
     */
    private array $transactions;

    public function __construct(
        OperationId $id,
        TransactionDto ...$transactionDtos
    ) {
        $this->id = $id;
        $this->dateTime = new DateTimeImmutable();

        $this->transactions = [];
        foreach ($transactionDtos as $dto) {
            $this->transactions[] = new Transaction(
                $dto->id,
                $dto->debitAccountId,
                $dto->creditAccountId,
                $dto->amount,
                $this->dateTime,
            );
        }
    }
}
