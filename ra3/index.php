<?php 
    $aEjercicios = array(
        array("id" => 1, "titulo" => "Número aleatorio", "enlace" => "ejercicio1/index.php"),
        array("id" => 2, "titulo" => "Reescritura de contraseñas", "enlace" => "ejercicio2/index.php"),
        array("id" => 3, "titulo" => "Operaciones aritméticas", "enlace" => "ejercicio3/index.php"),
        array("id" => 4, "titulo" => "Encuesta", "enlace" => "ejercicio4/index.php"),
        array("id" => 5, "titulo" => "Figuras geométricas", "enlace" => "ejercicio5/index.php")
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ra3</title>
</head>
<body>
    <h2>Ra3</h2>

    <?php
        foreach ($aEjercicios as $ejercicio) {
            echo "<p><a href='" . $ejercicio["enlace"] . "'>" . $ejercicio["titulo"] . "</a></p>";
        } 
    ?>
</body>
</html>