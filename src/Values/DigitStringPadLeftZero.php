<?php

namespace Oyova\PhpSupport\Values;

use RyanWhitman\PhpValues\Concerns\Stringable;
use RyanWhitman\PhpValues\Value;

abstract class DigitStringPadLeftZero extends Value
{
    use Stringable;

    protected int $numZeros;

    protected array $baseValues = [
        DigitString::class,
    ];

    protected function transform(string $value): string
    {
        return str_pad($value, $this->numZeros, '0', STR_PAD_LEFT);
    }

    protected function validate(string $value): bool
    {
        return DigitString::isValid($value);
    }
}
