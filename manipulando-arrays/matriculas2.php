<?php

$alunos2022 = [
    'Dudu',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

$alunos2023 = [...$alunos2022, 'Dudu Montz',...$novosAlunos]; // Ajuntar arrays
array_push($alunos2023, 'Alice', 'Bob', 'Charlie'); // Adicionar mais de um item no final
$alunos2023[] = 'Luiz'; // Adicionar um item no final

array_unshift($alunos2023, 'Stephane', 'Rafaela'); // Adiciona item no começo

echo array_shift($alunos2023) . PHP_EOL; // Remove o primeiro elemento e retorna ele

echo array_pop($alunos2023) . PHP_EOL; // Remove o último elemento e retorna o valor dele

var_dump($alunos2023);