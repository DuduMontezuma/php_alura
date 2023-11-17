<?php

$dados = [
    'nome' => 'Dudu', 
    'nota' => 10, 
    'idade' => 27];


//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; // Vai pegar os parâmetros do array e direcionar para cada varivel

extract($dados); //Vai criar automaticamente variaveis com o nome das chaves 

var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); // Pega várias variáeis e cria um array