<?php

require "src/StringUtils.php";
require_once  __DIR__ . '/../vendor/autoload.php';

\Webmozart\Assert\Assert::eq(StringUtils\capitalize('hello'), 'Hello');
\Webmozart\Assert\Assert::eq(StringUtils\capitalize(''), '');


echo 'Все тесты пройдены!';
