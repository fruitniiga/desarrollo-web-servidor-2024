<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );
    ?>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["consola"])) $tmp_consola = $_POST["consola"];
            else $tmp_consola = "";
        
            if ($tmp_consola == "") $err_consola = "La consola es obligatoria";
            else {
                $consolas_validas = ["ps4","ps5","switch","xboxsx"];
                if (!(in_array($tmp_consola, $consolas_validas))) $err_consola = "La consola no es valida";
                else $consola = $tmp_consola;
            }

            if ($tmp_fecha_lanzamiento = "") $err_fecha_lanzamiento = "La fecha de lanzamiento es obligatorio"; 
            else{
                $patron = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";
                if (!preg_match($patron, $tmp_fecha_lanzamiento)) $err_fecha_lanzamiento = "Formato de fecha incorrecto";
                else{
                    list($anno_lanzamiento,$mes_lanzamiento,$dia_lanzamiento) = 
                        explode('-',$tmp_fecha_lanzamiento);//mete el año el mes y el dia en un array de tres huecos, la - es por el formato de la fecha
                    if ($anno_lanzamiento < 1947) {
                        $err_fecha_lanzamiento = "El año no puede ser inferior a 1947";
                        $anno_actual = date("Y");
                        $mes_actual = date("m");
                        $dia_actual = date("d");

                        if($anno_lanzamiento - $anno_actual < 5) $fecha_lanzamiento = $tmp_fecha_lanzamiento;
                        elseif($anno_lanzamiento - $anno_actual > 5) $err_fecha_lanzamiento = "La fecha debe ser anterior a dentro de 5 años";
                        elseif($anno_lanzamiento - $anno_actual == 5){
                            if($mes_lanzamiento - $mes_actual < 0) $fecha_lanzamiento = $tmp_fecha_lanzamiento;
                            elseif($mes_lanzamiento - $mes_actual > 0) $err_fecha_lanzamiento = "La fecha debe ser anterior a dentro de 5 años";
                            elseif($mes_lanzamiento - $mes_actual == 0){
                                if($dia_lanzamiento - $dia_actual <= 0) $fecha_lanzamiento = $tmp_fecha_lanzamiento;
                                elseif($dia_lanzamiento - $dia_actual > 0) $err_fecha_lanzamiento = "La fecha debe ser anterior a dentro de 5 años";
                            }
                        }
                    }
                }
            }
        }
    ?>
    <div class="container">
        <h1>Formulario de Videojuegos</h1>
        <form class="col-4" action="" method="post">
            <div class="mb-3">
                <input type="form-check-input" type="radio" name="consola" value="ps4">
                <label class="form-check-label">Playstation 4</label>
            </div>
            <div class="mb-3">
                <input type="form-check-input" type="radio" name="consola" value="ps5">
                <label class="form-check-label">Playstation 5</label>
            </div>
            <div class="mb-3">
                <input type="form-check-input" type="radio" name="consola" value="switch">
                <label class="form-check-label">Nintendo Switch</label>
            </div>
            <div class="mb-3">
                <input type="form-check-input" type="radio" name="consola" value="xbox">
                <label class="form-check-label">Xbox series S/X</label>
                <?php if(isset($err_consola)) echo "<span class='error'>$err_consola</span>" ?>
            </div>
            
            <div class="mb-3">
                <input type="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>