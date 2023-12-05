<?php

use Src\UniqueChars;

require_once('./vendor/autoload.php');

$example = new UniqueChars;
$tests = ['abbc', 'abccty', 'abbc', 'unbrt', 'hello', 'hello'];

foreach($tests as $test) {
    echo PHP_EOL . "$test : " . $example->CountUniqueChars($test);
}