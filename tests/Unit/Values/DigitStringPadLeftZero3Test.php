<?php

use Oyova\PhpSupport\Values\DigitStringPadLeftZero3;

$validValues = collect([
    // [input, transformed value]
    [1, '001'],
    [23, '023'],
    ['987', '987'],
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
    new stdClass(),
]);

testValidValues(DigitStringPadLeftZero3::class, $validValues);
testInvalidValues(DigitStringPadLeftZero3::class, $invalidValues);
itIsStringable(DigitStringPadLeftZero3::class, $validValues);
