<?php
//Exibir todos os números impares até 100

for($n = 1; $n <= 100; $n++){
    if($n % 2 != 0){
        echo $n . PHP_EOL;
    }
}