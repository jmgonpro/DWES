<?php 

    /**
     * Ejercicio 2. Reescritura de contraseñas.
     * 
     * Escribe un script que muestre un formulario con dos inputs de tipo password y verifique en el 
     * servidor que las entradas coinciden
     * 
     * @author Juan Manuel González Prófumo 
    */

    $procesaFormulario = false;
    $psw1 = $psw2 = $msgErrorPsw1 = $msgErrorPsw2 = $msgComprobacion = "";

    if (isset($_POST["comprobar"])) {
        $procesaFormulario = true;
        $psw1 = $_POST["psw1"];
        $psw2 = $_POST["psw2"];

        if (empty($psw1)) {
            $procesaFormulario = false;
            $msgErrorPsw1 = " * Introduce la contraseña";
        }

        if (empty($psw2)) {
            $procesaFormulario = false;
            $msgErrorPsw2 = " * Introduce la contraseña";
        }

        if ($psw1 == $psw2) {
            $msgComprobacion = "Contraseña correcta";
        }

        else {
            $msgComprobacion = "Contraseña no coincide";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reescritura de contraseñas</title>
</head>
<body>
    <h2>Reescritura de contraseñas</h2>

    <form action="" method="post">
        <p><label for="psw1">psw: <input type="password" name="psw1" value=<?php echo $psw1 ?>></label><span><span><?php echo $msgErrorPsw1 ?></span></span></p>
        <p><label for="psw2">repite psw: <input type="password" name="psw2" value=<?php echo $psw2 ?>></label><span><span><?php echo $msgErrorPsw2 ?></span></span></p>
        <p><input type="submit" name="comprobar" value="Comprobar"></p>
    </form>

    <?php 
        if ($procesaFormulario) {
            echo $msgComprobacion;
        }
    ?>
</body>
</html>