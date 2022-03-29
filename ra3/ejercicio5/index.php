<?php 

    /**
     * Ejercicio 5. Figuras geométricas.
     * 
     * Escribe un script que muestre una figura geométrica utilizando el formato svg. Para ello el script
     * mostrará formulario con un radio button con las figuras disponibles: circulo, rectangulo, cuadrado y
     * un cuadro de texto para seleccionar el color. En función de la figura elegida, el script solicitará los
     * datos necesarios para su visualización.
     * 
     * @author Juan Manuel González Prófumo
     * 
    */

    $procesaFormulario = false;
    $figuras = array("circulo", "rectangulo", "cuadrado");
    $figuraSeleccionada = "circulo";
    $color = "";

    if (isset($_POST["mostrar"])) {
        $procesaFormulario = true;
        $figuraSeleccionada = $_POST["figura"];
        $color = $_POST["color"];

        switch ($color) {
            case 'rojo':
                $color = "red";
                break;
            case 'blanco':
                $color = "white";
                break;
            case 'negro':
                $color = "black";
                break;
            case 'amarillo':
                $color = "yellow";
                break;
            case 'naranja':
                $color = "orange";
                break;
            case 'marron':
                $color = "brown";
                break;
            case 'azul':
                $color = "blue";
                break;
            case 'verde':
                $color = "green";
                break;
            default:
                $color = "grey";
                break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geométricas</title>
</head>
<body>

    <h2>Figuras geométricas</h2>

    <form action="" method="post">
        <?php
            foreach ($figuras as $figura) {
                if ($figura == "circulo") {
                    echo " $figura <input type='radio' name='figura' value='$figura' checked>";
                }

                else {
                    echo " $figura <input type='radio' name='figura' value='$figura'>";
                }
            }
        ?>
        <p><label for="color">color: <input type="text" name="color"></label></p>
        <p><input type="submit" name="mostrar" value="Mostrar"></p>
    </form>

    <?php 
        if ($procesaFormulario) {
            switch ($figuraSeleccionada) {
                case 'circulo':
                    echo "<svg width='100' height='100'>";
                    echo "<circle cx='50' cy='50' r='40' fill='$color' />";
                    echo "</svg>";
                    break;
                case 'rectangulo':
                    echo "<svg width='400' height='100'>";
                    echo "<rect width='400' height='100' fill='$color'/>";
                    echo "</svg>";
                    break;
                default:
                    echo "<svg width='400' height='180'>";
                    echo "<rect width='150' height='150' fill='$color' />";
                    echo "</svg>";
                    break;
            }
        }
    ?>
</body>
</html>