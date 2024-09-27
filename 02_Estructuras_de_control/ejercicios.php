<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio fechas</title>
</head>
<body>
<!-- 
    Ejercicio 1: MOSTRAR LA FECHA ACTUAL CON EL SIGUIENTE FORMATO:
        Viernes 27 de Septiembre de 2024
    UTILIZAR LAS ESTRUCTURAS DE CONTROL NECESARIAS
    
    EJERCICIO 2: MOSTRAR EN UNA LISTA LOS NÚMEROS MÚLTIPLOS DE 3 USANDO
    WHILE E IF

    EJERCICIO 3: CALCULAR LA SUMA DE LOS NÚMEROS PARES ENTRE 1 Y 20

    EJERCICIO 4: CALCULAR EL FACTORIAL DE 6 CON WHILE
-->


<?php

$dia = date("N");
$dia = match ($dia) {
    "1" => "Lunes",
    "2" => "Martes",
    "3" => "Miercoles",
    "4" => "Jueves",
    "5" => "Viernes",
    "6" => "Sabado",
    "7" => "Domingo"
};

$diaNumero = date("j");
$mes = date("n");
$mes = match ($mes) {
    "1" => "Enero",
    "2" => "Febrero",
    "3" => "Marzo",
    "4" => "Abril",
    "5" => "Mayo",
    "6" => "Junio",
    "7" => "Julio",
    "8" => "Agosto",
    "9" => "Septiembre",
    "10" => "Octubre",
    "11" => "Noviembre",
    "12" => "Diciembre"
};
$ano = date("Y");

echo "<h3>$dia $diaNumero de $mes de $ano</h3>";

?>
</body>
</html>