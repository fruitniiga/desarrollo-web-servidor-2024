<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }
    </style>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
        require('../../05_funciones/depurar.php');
        require('conexion.php');
    ?>
</head>
<body>
<div class="container">
    <h1>Nuevo anime</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo"];
            $nombre_estudio = $_POST["nombre_estudio"];
            $anno_estreno = $_POST["anno_estreno"];
            $num_temporadas = $_POST["num_temporadas"];


            $sql = "INSERT INTO animes (titulo, nombre_estudio,anno_estreno,num_temporadas)
                VALUES ('$titulo', '$nombre_estudio', $anno_estreno, $num_temporadas)"; // si es numero no hace falta las comillas

            $_conexion -> query($sql);


            // if($tmp_titulo == ''){
            //     $err_titulo = "El titulo es un campo obligatorio";
            // }else{
            //     if(strlen($tmp_titulo) < 1 || strlen($tmp_titulo)>80){
            //         $err_titulo = "El titulo debe tener como mucho 80 caracteres";
            //     }else{
            //         $titulo = $tmp_titulo;
            //     }
            // }

            // if($tmp_nombre_estudio == ''){
            //     $err_nombre_estudio = "El nombre del estudio es un campo obligatorio";
            // }else{
            //     $nombre_estudio = $tmp_nombre_estudio;
                
            // }
            // if(isset($_POST["anno_estreno"])){
            //     $tmp_anno_estreno = depurar($_POST["anno_estreno"]);
            // }else{
            //     $tmp_anno_estreno = '';
            // }

            // if($tmp_anno_estreno == ''){
            //     $anno_estreno = "Sin informacion";
            // }else{
            //     if(!filter_var($tmp_anno_estreno, FILTER_VALIDATE_INT)){
            //         $err_anno_estreno = "El año de estreno debe ser numerico";
            //     }else{

            //         if($tmp_anno_estreno < 1960 || $tmp_anno_estreno > date("Y") + 5){
            //             $err_anno_estreno = "El año de estreno debe estar entre 1960 y 2029";
            //         }else{
            //             $anno_estreno = $tmp_anno_estreno;
            //         }
            //     }
            // }

            // if($tmp_num_temporadas == ''){
            //     $err_num_temporadas = "El número de temporadas es un campo obligatorio";
            // }else{
            //     if(!filter_var($tmp_num_temporadas, FILTER_VALIDATE_INT)){
            //         $err_num_temporadas = "El número de temporadas debe ser un número entero";
            //     }else{
            //         if($tmp_num_temporadas < 1 || $tmp_num_temporadas > 99){
            //             $err_num_temporadas = "El número de temporadas debe estar entre 1 y 99";
            //         }else{  
            //             $num_temporadas = $tmp_num_temporadas;
            //         }
            //     }
            // }     
        }
    ?>
    <form class="col-4" action="" method="post">
        <h1>Formulario Animes</h1>
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input class="form-control" type="text" name="titulo">
                <?php if(isset($err_titulo)) echo "<span class='error'>$err_titulo</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre Estudio</label>
                <select name="nombre_estudio">
                <?php 
                    $estudios = ["Kyoto Animation", "Diomedéa", "Studio Deen", "Mappa", "Studio Ghibli"]; 
                    foreach($estudios as $estudio) { ?> 
                        <option value="<?php echo $estudio; ?>">
                            <?php echo $estudio; ?>
                        </option> 
                    <?php } ?>
                </select>
                <?php if(isset($err_nombre_estudio)) echo "<span class='error'>$err_nombre_estudio</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Año Estreno</label>
                <input class="form-control" type="text" name="anno_estreno">
                <?php if(isset($err_anno_estreno)) echo "<span class='error'>$err_anno_estreno</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Numero de Temporadas</label>
                <input class="form-control" type="text" name="num_temporadas">
                <?php if(isset($err_num_temporadas)) echo "<span class='error'>$err_num_temporadas</span>" ?>
            </div>
            <div>
                <input class="btn btn-info" type="submit" value="Insertar">
            </div>
    </form>

    <?php
        if(isset($titulo) && isset($nombre_estudio) && isset($anno_estreno) && isset($num_temporadas)) { ?>
            <p><?php echo $titulo ?></p>
            <p><?php echo $nombre_estudio ?></p>
            <p><?php echo $anno_estreno ?></p>
            <p><?php echo $num_temporadas?></p>
        <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>