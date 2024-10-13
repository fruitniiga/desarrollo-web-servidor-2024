<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iva</title>
</head>
<body>
    <!--
    General = 21%
    reducido = 10%
    superrreducido = 4%
    10 iva = general pvp 12,1
    10 iva = reducido pvp 11 
    -->
    <form action="" method="post">
        <input type="text" name="Precio">
        <br>
        <select name="iva" id="iva">
            <option value="General">General</option>
            <option value="Reducido">Reducido</option>
            <option value="Superreducido">Superreducido</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $precio = $_POST["Precio"];
            $iva = $_POST["iva"];

            $pvp = match ($iva) {
                "General" => $precio * 1.21,
                "Reducido" => $precio * 1.10,
                "Superreducido" => $precio * 1.04,
            };
            echo "<h3> El PVP es $pvp </h3>";
        }
    ?>
</body>
</html>