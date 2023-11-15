<?php

require_once 'funcoes.php';

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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], valorASacar: 500);

$contasCorrentes['123.256.189-10'] = sacar($contasCorrentes['123.256.189-10'], valorASacar: 200);

$contasCorrentes['123.456.489-11'] = depositar($contasCorrentes['123.456.489-11'], valor: 900);

unset ($contasCorrentes['123.256.189-10']);

titularComLetrasMaiusculas($contasCorrentes['123.456.489-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        mensagem: "$cpf $titular $saldo"
    );
}
