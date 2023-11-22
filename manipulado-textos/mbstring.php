<?php

$string = 'Testes de integração com PHP';

echo strlen($string) . PHP_EOL; // Mostrar tamanho da String (Conta em bytes)
echo mb_strlen($string) . PHP_EOL;  // MB informa para o PHP que eu estou trabalhando com uma string multibyte
echo mb_strtoupper($string); // Passar string para maiúscula

echo mb_convert_case($string, MB_CASE_TITLE); // Trnaforma a primeira letra de cada palavra em maiúscula 