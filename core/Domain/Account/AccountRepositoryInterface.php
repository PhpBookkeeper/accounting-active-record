<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Account;

interface AccountRepositoryInterface
{
    public function getById(AccountId $id): ?Account;

    public function save(Account $account): void;

}
