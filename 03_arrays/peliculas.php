<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );
    ?>
</head>
<body>
    <?php
        $peliculas = [
            
            ["Karate a muerte en torremolinos", "Accion", 1975],
            ["Sharknado 1-5", "Accion", 2015],
            ["Princesa por sorpresa 2", "Comedia", 2008],
            ["Temblores 4", "Terror", 2018],
            ["Cariño, he cogido a los niños", "Aventuras", 2001],
            ["Stuart Little", "Infantil", 2000],
        ];

        /***
         * 1. Añadir con un rand, la duracion de cada pelicula como una nueva columna. La duracion sera
         * un numero aleatorio entre 30 y 240
         * 
         * 2. Añadir como una nueva columna, el tipo de pelicula. EL tipo sera:
         *      -Cortometraje. si la duracion es menor de 60
         *      -Largometraje, si la duracion es mayor o igual que 60
         * 
         * 3. Mostrar en otra tabla todas las columnas y ordenar ademas en este orden:
         *      1.Por el genero
         *      2.Por el año
         *      3.Por el titulo(todo alaveticamente, y el año del mas reciente al mas antiguo)
         * 
        */
    ?>
        <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Año lanzamiento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($peliculas as $pelicula) {
                    list($titulo, $categoria, $año) = $pelicula;//desconpongo un array n varias variables.
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$categoria</td>";
                    echo "<td>$año</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>