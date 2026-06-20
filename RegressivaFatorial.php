<?php


function getFatorial(int $numeroFatorial) {
    $valorFinal = 1;
    for ($i = $numeroFatorial; $i > 1; $i--) {
        $valorFinal *= $i;
    }
    echo "O resultado do Fatorial do número !$numeroFatorial é: " . $valorFinal . "<br>";
}

$i = 0;
while ($i < 10) {
    getFatorial($i);
    $i++;
}
