<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
    
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" name="base" id="base"><br><br>
        <label for="exponente">Exponente</label>
        <input type="text" name="exponente" id="exponente"><br><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
        /***
         * Crear un formulario que reciba dos parametros : Base y exponente
         * 
         * Cuando se envie el formulario, se calculara el resultado de elevar
         * la base al exponente
         * 
         * EJEMPLOS:
         * 2 elevado a 3 = 8 => 2x2x2 = 8
         * 3 elevado a 2 = 9 => 3x3 = 9
         */

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST["base"];
            $exponente = $_POST["exponente"];
            $solucion = 1;

            for ($i=0; $i < $exponente; $i++) { 
                $solucion = $solucion * $base;
            }
            
            echo "<h1>$solucion</h1>";
        }
    ?>
</body>
</html>