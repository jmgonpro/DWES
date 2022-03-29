<?php 
    /**
     *  Ejercicio 1. Número aleatorio
     * 
     *  Escribe un script que muestre al usuario un número aleatorio comprendido 
     *  entre dos números que han sido solicitados previamente mediante un formulario
     * 
     *  @author Juan Manuel González Prófumo
    */

    $procesaFormulario = false;
    $n1 = $n2 = $aleatorio = 0;
    $msgErrorN1 = $msgErrorN2 = "";

    if (isset($_POST["enviar"])) {
        $procesaFormulario = true;
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        if (empty($n1)) {
            $procesaFormulario = false;
            $msgErrorN1 = " * Introduce un número";
        }

        if (empty($n2)) {
            $procesaFormulario = false;
            $msgErrorN2 = " * Introduce un número";
        }

        if ($n1 > $n2) {
            $aleatorio = rand($n2, $n1);
        }

        $aleatorio = rand($n1, $n2);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatorio</title>
</head>
<body>
    <h2>Número aleatorio</h2>

    <form action="" method="post">
        <p><label for="n1">Primer número: <input type="number" name="n1" value=<?php echo $n1 ?>></label><span><?php echo $msgErrorN1 ?></span></p>
        <p><label for="n2">Segundo número: <input type="number" name="n2" value=<?php echo $n2 ?>></label><span><?php echo $msgErrorN2 ?></span></p>
        <p><input type="submit" name="enviar" value="Enviar"></p>
    </form>

    <?php 
        if ($procesaFormulario) {
            echo $aleatorio;
        }
    ?>
</body>
</html>