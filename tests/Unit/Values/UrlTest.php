<?php

use Oyova\PhpSupport\Values\Url;

$validValues = collect([
    // [input, transformed value]
    ['http://test.com', 'http://test.com'],
    ['https://test.com', 'https://test.com'],
    ['https://www.test.com', 'https://www.test.com'],
    ['   https://www.test.com   ', 'https://www.test.com'],
]);

$invalidValues = collect([
    'www.test.com',
    '123',
    'test',
    [],
    new stdClass(),
]);

testValidValues(Url::class, $validValues);
testInvalidValues(Url::class, $invalidValues);
itIsStringable(Url::class, $validValues);
