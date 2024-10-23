
<!-- -CREAR UNA COPIA DE IRPF.PHP CON GET EN VEZ DE POST Y CONTROLAR LOS ERRORES DE ENVIAR EL FORMULARIO VACIO
        -CONTROLAR EN TODOS LOS DEMAS FORMULARIOS HECHOS CON POST QUE SI SE MANDAN LOS CAMPOS VACIOS, SE MUESTRE UN MENSAJE.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora POST</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );

        require ("../05_funciones/irpf.php");
    ?>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="salario" placeholder="Salario">
        <input type="submit" value="Calcular salario bruto">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario = $_POST["salario"];

        if ($salario != '') {
            if (filter_var($salario, FILTER_VALIDATE_FLOAT) != FALSE) {
                $tmp_salario = $salario;
            } else{
                echo "<p>El salario debe ser un numero</p>";
            } 
        } else{
            echo "<p>El salario es obligatorio</p>";
        }

        if (isset($temp_salario)) {
            irpf($salario);
        }
    }
    ?>
</body>
</html>