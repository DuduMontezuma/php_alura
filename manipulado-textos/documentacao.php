<?php

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL; // Troca não eficás

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hi all, I said hello") . PHP_EOL;
