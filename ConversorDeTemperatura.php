<?php

//Fórmula (0 °C × 9/5) + 32 = 32 °F

// 9/5 == 1.8 logo -> (0° * 1.8) + 32 = 32 °F


function conversorDeTemperatura(float $tempetura, string $escala) {

    if ($escala != "C" &&  $escala != "c" && $escala != "f" && $escala != "F") {
        return "Escala inválida, insira 'C' para Celsius ou 'F' para Fahrenheit.";
    }

    if ($escala == "C" || $escala == "c") {
        $tempeturaInFahrenheit = ($tempetura * 1.8) + 32;
        return "A temperatura em Fahrenheit é " . $tempeturaInFahrenheit;
    }

    if ($escala == "F" || $escala == "f") {
        $tempeturaInCelsius = ($tempetura - 32) / 1.8;
        return "A temperatura em Celsius é " . $tempeturaInCelsius;
    }
}

echo "Teste 1: 25°C para Fahrenheit" . "<br>";
echo conversorDeTemperatura(25, "C") . "<br>";

echo "Teste 2: 77°F para Celsius " . "<br>";
echo conversorDeTemperatura(77, "F") . "<br>";
