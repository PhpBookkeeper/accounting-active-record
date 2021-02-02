<?php

declare(strict_types=1);

namespace YiiSoft\Billing\Domain\Operation;

use InvalidArgumentException;

final class EntryType
{
    public const DEBIT = 'debit';
    public const CREDIT = 'credit';

    private string $current;

    public function __construct(string $current)
    {
        if (!in_array($current, [self::DEBIT, self::CREDIT], true)) {
            throw new InvalidArgumentException();
        }

        $this->current = $current;
    }

    public static function debit(): self
    {
        return new self(self::DEBIT);
    }

    public static function credit(): self
    {
        return new self(self::CREDIT);
    }
}
