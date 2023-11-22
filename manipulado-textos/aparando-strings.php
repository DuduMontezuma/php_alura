<?php

$csv = '.,Dudu Montezuma,24,.';

echo trim($csv, ',.') . PHP_EOL; // Apara a string nas extremidades com os valores passados
echo ltrim($csv, ',.') . PHP_EOL; // Apara da esquerda da string os valores passados
echo rtrim($csv, ',.') . PHP_EOL; // Apara da direita da string os valores passados