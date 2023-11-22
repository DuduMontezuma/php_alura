<?php

$nome = 'Dudu Montezuma';
$email = ' carlos15montezuma@gmail.com ';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8){
    echo 'Senha Insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); // Acha a posição do @

$usuario = substr($email, 0, $posicaoDoArroba); // Mostra tudo antes do @

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome); // Explode vai separa a string pelo parametro "espaço"

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

echo trim($email). PHP_EOL; // Vai tirar os espaços do começo e final da string