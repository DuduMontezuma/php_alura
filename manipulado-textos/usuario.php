<?php

$email = 'carlos15montezuma@gmail.com';
$senha = '123';

echo mb_strlen($senha) . PHP_EOL; // O 'mb' vai possibilitar a tratar os caracteres com acento

// Verificando o tamanho da string. OBS: Se cor letras com acento, elas ocupam mais de um bite, e o codigo será quebrado
if (mb_strlen($senha) < 8){
    echo 'Senha Insegura'. PHP_EOL;
}

// Aqui vamos buscar a posição do @ na string
$posicaoDoArroba = strpos($email, '@');

// Vai retornar uma string de dentro da outra, que começa na posição 0 e vai até a 17
$usuario = substr($email, 0, $posicaoDoArroba);
echo substr($email, 0, 17). PHP_EOL;
echo mb_strtoupper($usuario) . PHP_EOL; // Vai passar a string toda para maiúscula
echo mb_strtolower($usuario) . PHP_EOL; // Vai passar a string toda para minúscula

// Vai mostrar uma string dentro da outra, partindo do caracter 9 até o final
echo substr($email, 18) .PHP_EOL;
echo substr($email, $posicaoDoArroba + 1). PHP_EOL;
