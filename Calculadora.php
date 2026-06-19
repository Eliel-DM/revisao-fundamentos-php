<?php

function somar(int $number1, int $number2) {
   $resultadoTotal = $number1 + $number2;
   return $resultadoTotal;
}

function subtrair(int $number1, int $number2) {
   $resultadoTotal = $number1 - $number2;
   return $resultadoTotal;
}

function multiplicar(int $number1, int $number2) {
   $resultadoTotal = $number1 * $number2;
   return $resultadoTotal;
}

function dividir(int $number1, int $number2) {

   if ($number2 == 0) {
      return "ERROR: Não é possível dividir por zero!";
   }

   $resultadoTotal = $number1 / $number2;
   return $resultadoTotal;
}

function main() {

   $number1 = 10;
   $number2 = 10;

   echo "Resultado Soma: " . somar($number1, $number2) . "<br>";
   echo "Resultado Subtração: " .  subtrair($number1, $number2) . "<br>";
   echo "Resultado Multiplicação: " . multiplicar($number1, $number2) . "<br>";
   echo "Resultado Divisão: " . dividir($number1, $number2) . "<br>";
}

main();
