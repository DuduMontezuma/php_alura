<?php

$texto = "Texto com qualquer coisa poxa e caramba";

echo str_replace(
    ['poxa', 'caramba'], 
    ['p', 'c'], 
    $texto);


echo strtr($texto, 'poxa', '***@'). PHP_EOL; // Edita uma string por caracteres
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']). PHP_EOL; // Edita palavras de uma string

