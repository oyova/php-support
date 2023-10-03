<?php

namespace Oyova\PhpSupport\Values;

use RyanWhitman\PhpValues\Concerns\Stringable;
use RyanWhitman\PhpValues\Value;

class Url extends Value
{
    use Stringable;

    protected function transform(string $value): string
    {
        return trim($value);
    }

    protected function validate(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_URL);
    }
}
