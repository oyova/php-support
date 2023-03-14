<?php

use Illuminate\Support\Collection;

function testValidValues(string $valueClass, Collection $values): void
{
    test('valid values', fn () => (
        $values->each(
            fn ($v) => (expect($valueClass::getFrom($v[0]))->toBe($v[1]))
        )
    ));
}

function testInvalidValues(string $valueClass, Collection $values): void
{
    test('invalid values', fn () => (
        $values->each(
            fn ($v) => (expect($valueClass::isValid($v))->toBeFalse())
        )
    ));
}

function itIsStringable(string $valueClass, Collection $values): void
{
    it('is stringable', fn () => (
        $values->each(
            fn ($v) => (
                expect((string) $valueClass::from($v[0]))->toBe((string) $v[1])
            )
        )
    ));
}
