<?php

use Oyova\PhpSupport\Values\DigitString;

$validValues = collect([
    // [input, transformed value]
    [1, '1'],
    [987, '987'],
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

testValidValues(DigitString::class, $validValues);
testInvalidValues(DigitString::class, $invalidValues);
itIsStringable(DigitString::class, $validValues);
