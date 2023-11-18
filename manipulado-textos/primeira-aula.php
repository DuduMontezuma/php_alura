<?php

$nome = 'Dudu Montezuma';

// Saber se uma string está dentro da outra

$ehDaMinhaFamilia = str_contains($nome, 'Montezuma');

if ($ehDaMinhaFamilia){
    echo "$nome é da minha família." . PHP_EOL;
} else {
    echo "$nome não éd a minha familia." . PHP_EOL;
}
