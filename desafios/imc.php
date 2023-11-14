<?php

$peso = 103;
$altura = 1.86;

$imc = $peso / ($altura * $altura);
$imc = number_format($imc,2);

if($imc < 18.5){
    echo "IMC: $imc. Abaixo do peso.";
} else if ($imc >= 18.5 && $imc < 25){
    echo "IMC: $imc. Peso ideal.";
} else if ($imc >= 25 && $imc < 30){
    echo "IMC: $imc. Acima do peso.";
} else {
    echo "IMC: $imc. Obesidade";
}