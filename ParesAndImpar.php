<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$numerosPares = [];
$counter =  0;

foreach ($numeros as $number) {

    if ($number % 2 == 0) {
        array_push($numerosPares, $number);
    }

    if ($number % 2  != 0) {
        $counter += 1;
    }
}
echo "Segue a lista de números pares identificados: <br>";
var_dump($numerosPares);
echo "<br>";
echo "A quantidade de números impares presentes na no array é: " . $counter;
