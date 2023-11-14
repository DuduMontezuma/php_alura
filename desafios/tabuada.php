<?php
$num = 5;
echo "-------- Tabuada de $num -----------" . PHP_EOL;

for($i = 0; $i <= 10; $i++){
    $resultado = $i * $num;
    echo "$num X $i = $resultado" . PHP_EOL;
}