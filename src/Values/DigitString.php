<?php

namespace Oyova\PhpSupport\Values;

use RyanWhitman\PhpValues\Concerns\Stringable;
use RyanWhitman\PhpValues\Value;

class DigitString extends Value
{
    use Stringable;

    protected function transform($value)
    {
        if (is_int($value)) {
            $value = (string) $value;
        }

        if (is_string($value)) {
            return trim($value);
        }
    }

    protected function validate(string $value): bool
    {
        return is_string($value) && preg_match('/^\d+$/', $value);
    }
}
