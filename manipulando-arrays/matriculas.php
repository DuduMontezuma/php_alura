<?php

$alunos2022 = [
    0 => 'Dudu',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria'
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane'
];

$alunos2023 = array_merge($alunos2022, $novosAlunos);
var_dump($alunos2023);