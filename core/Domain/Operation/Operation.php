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
        CreateTransactionData ...$createTransactionData
    ) {
        $this->id = $id;
        $this->dateTime = new DateTimeImmutable();

        $this->transactions = [];
        foreach ($createTransactionData as $data) {
            $this->transactions[] = new Transaction(
                $data->id,
                $data->debitAccountId,
                $data->creditAccountId,
                $data->amount,
                $this->dateTime,
            );
        }
    }
}
