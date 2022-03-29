<?php 
    /**
     * Ejercicio 4. Encuesta.
     * 
     * Escribe un script que muestre un formulario que permita la votación de 10 items (item1, item2, …)
     * mediante un radio button de 1 a 5. La respuesta al formulario mostrará el item mejor valorado.
     * 
     * @author Juan Manuel González Prófumo
    */

    $procesaFormulario = false;
    $votaciones = array();
    $mejorValorado = 0;

    for ($i = 1; $i <= 10; $i++) { 
        $votaciones["item$i"] = 0;
    }

    if (isset($_POST["enviar"])) {
        $procesaFormulario = true;

        foreach ($votaciones as $item => $valor) {
            $votaciones[$item] = $_POST[$item];
        }

        $mejorValorado = max($votaciones);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <h2>Encuesta</h2>

    <form action="" method="post">
        <?php
            for ($i = 1; $i <= 10 ; $i++) { 
                echo "<p>item$i</p>";

                for ($j = 1; $j <= 5 ; $j++) { 
                    if ($j == 1) {
                        echo " $j <input type='radio' name='item$i' value='$j' checked>";
                    }

                    echo " $j <input type='radio' name='item$i' value='$j'>";
                    
                }
            } 
        ?>
        <p><input type="submit" name="enviar" value="Enviar"></p>
    </form>

    <?php
        if ($procesaFormulario) {
            echo "<p>Items mejor valorados</p>";
            
            foreach ($votaciones as $item => $valor) {
                if ($mejorValorado == $valor) {
                    echo "<p>$item => $valor</p>";
                }
            }
        } 
    ?>
</body>
</html>