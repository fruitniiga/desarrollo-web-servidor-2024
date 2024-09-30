<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos Array</title>
</head>
<body>
    <?php
        /**
         * Todos los arrays en PHP son asociativos, Como los Map en java
         * 
         * Tienen pares clave-valor
         */

         $numeros = [5,10,9,6,7,4];
         $numero = array(6,10,9,4,3);
         print_r($numeros);//Este print es para imprimir un array
         echo "<br>";
         print_r($numero);


         $animales = [
            "A01" => "Perro",
            "A02" => "Gato",
            "A03" => "Ornitorrinco",
            "A04" => "Suricato",
            "A05" => "Capibara"
         ];
         echo "<br><br>";
         print_r($animales);

         echo "<p>" . $animales["A01"] . "</p>"
    ?>
</body>
</html>