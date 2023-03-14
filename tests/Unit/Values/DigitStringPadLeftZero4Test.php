<?php

use Oyova\PhpSupport\Values\DigitStringPadLeftZero4;

$validValues = collect([
    // [input, transformed value]
    [1, '0001'],
    [23, '0023'],
    ['987', '0987'],
    ['4723', '4723'],
    ['55555', '55555'],
    ['  1234567  ', '1234567'],
]);

$invalidValues = collect([
    '',
    '22 22',
    '333r333',
    1.0,
    'test',
    [],
    new stdclass(),
]);

testValidValues(DigitStringPadLeftZero4::class, $validValues);
testInvalidValues(DigitStringPadLeftZero4::class, $invalidValues);
itIsStringable(DigitStringPadLeftZero4::class, $validValues);
