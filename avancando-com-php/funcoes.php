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