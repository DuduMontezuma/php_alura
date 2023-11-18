<?php

$url = 'http://alura.com.br';

// verificar se uma string começa com um texto específico

if(str_starts_with($url, 'https')){
    echo 'É uma URL segura.';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

// verificar se uma string termina com um texto específico

if(str_ends_with($url, '.br')){
    echo 'É um domínio do Brasil';
} else {
    echo 'Não é um domínio do Brasil';
}