<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iva</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );

        require ("../05_funciones/iva.php");
    ?>
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
            if($precio == '') {
                echo "<p>El precio es obligatorio</p>";
            } else {
                if(filter_var($tmp_precio, FILTER_VALIDATE_FLOAT) === FALSE) {
                    echo "<p>El precio debe ser un número</p>";
                } else {
                    if($precio < 0) {
                        echo "<p>El precio debe ser mayor o igual que cero</p>";
                    } else {
                        $tmp_precio = $precio;
                    }
                }
            }
    
            if($iva == '') {
                echo "<p>El IVA es obligatorio</p>";
            } else {
                $valores_validos_iva = ["general", "reducido", "superreducido"];
                if(!in_array($iva, $valores_validos_iva)) {
                    echo "<p>El IVA solo puede ser: general, reducido, superreducido</p>";
                } else {
                    $tmp_iva = $iva;
                }
            }
    
            if(isset($tmp_precio) && isset($tmp_iva)) {
                iva($tmp_precio, $tmp_iva);
            }
        }
    ?>
</body>
</html>