<?php

$mediaTotalNotas = 0;

$notas = [
    'João' => 8.5,
    'Maria' => 5.5,
    'Pedro' => 4.0,
    'Ana' => 7.0,
    'Carlos' => 6.5,
    'Fernanda' => 9.0,
    'Rafael' => 4.5
];

foreach ($notas as $nome => $nota) {
    $mediaTotalNotas += $nota;
    if ($nota >= 7) {
        echo "O aluno(a) $nome foi aprovado! <br>";
    } elseif ($nota > 5 && $nota < 6.9) {
        echo "O aluno(a) $nome está de recuperação!<br>";
    } else {
        echo "O aluno(a) $nome está reprovado!<br>";
    }
}

echo "A média total é de: " . $mediaTotalNotas / sizeof($notas) . "<br>";
