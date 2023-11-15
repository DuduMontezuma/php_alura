<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Dudu',
        'saldo' => 1000
    ], 
    '123.456.489-11' => [
        'titular' => 'Maria',
        'saldo' => '10000'
    ], 
    '123.256.189-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.244.159-10'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
}