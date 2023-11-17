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

$alunos2023 = [...$alunos2022, 'Dudu Montz',...$novosAlunos];
var_dump($alunos2023);