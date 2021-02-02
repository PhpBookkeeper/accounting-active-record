<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use DateTimeImmutable;

final class Operation
{
    private string $id;
    private DateTimeImmutable $dateTime;

    /**
     * @var Transaction[]
     */
    private array $transactions;

    /**
     * @param string $id
     * @param DateTimeImmutable $dateTime
     * @param TransactionDto[] $transactionDtos
     * @param TransactionNextIdentityInterface $transactionNextIdentity
     * @param EntryNextIdentityInterface $entryNextIdentity
     */
    public function __construct(
        string $id,
        DateTimeImmutable $dateTime,
        array $transactionDtos,
        TransactionNextIdentityInterface $transactionNextIdentity,
        EntryNextIdentityInterface $entryNextIdentity
    ) {
        $this->id = $id;
        $this->dateTime = $dateTime;

        $this->transactions = [];
        foreach ($transactionDtos as $dto) {
            $this->transactions[] = new Transaction(
                $transactionNextIdentity->nextTransactionIdentity(),
                $dto->debitAccountId,
                $dto->creditAccountId,
                $dto->amount,
                $dateTime,
                $entryNextIdentity
            );
        }
    }
}
