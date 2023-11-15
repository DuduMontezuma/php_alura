<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem: "Você não pode sacar.");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valor) : array
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem(mensagem: "Depositos precisam ser positivos");
    }
    return $conta;
}

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


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(mensagem: $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
