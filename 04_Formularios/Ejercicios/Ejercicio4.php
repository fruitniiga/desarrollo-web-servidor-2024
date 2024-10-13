<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperaturas</title>
</head>
<body>
<h2>Introduce dos numeros</h2>
    <form action="" method="post">
        <p>Temperatura: </p>
        <input type="text" name="cifra"><br>
        <p>Unidad: </p>
        <select name="unidad" id="unidad">
            <option value="Celsius">CELSIUS</option>
            <option value="Kelvin">KELVIN</option>
            <option value="Fahrenheit">FAHRENHEIT</option>
        </select>
        <p>Convertir a: </p>
        <select name="conversor" id="conversor">
            <option value="Celsius">CELSIUS</option>
            <option value="Kelvin">KELVIN</option>
            <option value="Fahrenheit">FAHRENHEIT</option>
        </select>
        <input type="submit" name="Convertir">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $celsius = $_POST["cifra"];
            $unidad = $_POST["unidad"];
            $conversor = $_POST["conversor"];

            $valor = $celsius;
            $temperaturaConver = 0;

            if ($unidad == "Fahrenheit") $valor = ($celsius - 32) * 5 / 9;
            elseif ($unidad == "Kelvin") $valor = $celsius - 273.15;

            if ($conversor == "Fahrenheit") $temperaturaConver = ($valor * 9 / 5) + 32;
            elseif ($conversor == "Kelvin") $temperaturaConver = $valor + 273.15;
            else $temperaturaConver = $valor;

            echo "La temperatura de $celsius $unidad a $conversor es: $temperaturaConver";
        }
    ?>
</body>
</html>